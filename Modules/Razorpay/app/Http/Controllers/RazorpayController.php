<?php

namespace Modules\Razorpay\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Razorpay\Api\Api;

class RazorpayController extends Controller
{

    protected $razorpay;

    public function __construct()
    {
        $this->razorpay = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
    }

    public function test(){
        return view('razorpay::index');
    }


    public function payment(Request $request) {

        $amount = $request->amount * 100;
        $currency = "INR";

        $order = $this->razorpay->order->create([
            'receipt' => uniqid(),
            'amount' =>  $amount ,
            'currency' =>  $currency,
            'payment_capture' => 1,
        ]);

        return response()->json([
            'order_id' => $order['id'],
            'amount' =>  $amount ,
            'currency' => $currency,
        ]);

    }

    public function success(Request $request) {

        $razorpayPaymentId = $request->razorpay_payment_id;
        $razorpayOrderId = $request->razorpay_order_id;
        $razorpaySignature = $request->razorpay_signature;

        $generatedSignature = hash_hmac('sha256', $razorpayOrderId . '|' . $razorpayPaymentId, env('RAZORPAY_SECRET'));

        if($razorpaySignature === $generatedSignature){
            return response()->json([
                'success' => true,
                'message' => 'payment was successful'
            ]);
        }
    }

    public function refund(Request $request) {

        try {

            $this->razorpay->refund->create([
                'payment_id' => 'pay_P3LJBDQiFrkMUS',
                //'amount'=> $request->amount,
            ]);

            notify()->success('Refund initiated successfully');
            Return redirect()->back();

        } catch (\Throwable $th) {
            notify()->error($th->getMessage());
            Return redirect()->back();
        }
    }
}
