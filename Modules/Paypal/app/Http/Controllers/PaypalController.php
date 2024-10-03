<?php

namespace Modules\Paypal\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PaypalClient;

class PaypalController extends Controller
{

    protected $paypal;

    public function __construct()
    {
        $this->paypal = new PaypalClient;
        $this->paypal->setApiCredentials(config('paypal'));
    }


    public function payment()
    {

        $this->paypal->getAccessToken();


        $response = $this->paypal->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal.success'),
                "cancel_url" => route('paypal.cancel'),
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" =>  50,
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        } else {
            return redirect()->route('paypal.cancel');
        }
    }

    public function success(Request $request)
    {

        $this->paypal->getAccessToken();
        $response = $this->paypal->capturePaymentOrder($request->token);

        # orderId=6JC64779F8722624H, paymentId=2L395613K7850470C required for refund

        if (isset($response['status']) && $response['status'] === 'COMPLETED') {

            notify()->success('Transaction completed successfully...');
            return redirect()->route('home');
        } else {
            return redirect()->route('paypal.cancel');
        }
    }

    public function cancel()
    {
        notify()->error('transction failed');
        return redirect()->back();
    }

    public function refund()
    {
        $this->paypal->getAccessToken();

        $paymentId = '2L395613K7850470C';
        $transactionId = '6JC64779F8722624H';
        $refundAmount = 50.00;
        $note = 'refund';

        $response = $this->paypal->refundCapturedPayment($paymentId, $transactionId, $refundAmount, $note);

        if (isset($response['status']) && $response['status'] === 'COMPLETED') {
            notify()->success('Refund initiated successfully...');
            return redirect()->route('home');
        }
        notify()->error('Please try agin later');
        return redirect()->route('home');
    }
}
