<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\StripeClient;

class PaymentController extends Controller
{
    public function handlePayment()
    {

        $stripe = new StripeClient(env('STRIPE_SECRET'));

        $response = $stripe->checkout->sessions->create([
            'payment_method_types' => ['card', 'upi', 'netbanking', 'wallet', 'bank_transfer'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'inr',
                        'product_data' => ['name' => 'ecommerce'],
                        'unit_amount' =>  100 * 100,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('stripe.success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('stripe.cancel'),
        ]);

        if (isset($response->id) && $response->id != '') {
            return redirect($response->url);
        } else {
            return redirect()->route('stripe.cancel');
        }
    }

    public function success(Request $request)
    {

        if (isset($request->session_id)) {
            $stripe = new StripeClient(env('STRIPE_SECRET'));
            $response = $stripe->checkout->sessions->retrieve($request->session_id);

            dd($response);

            return redirect()->route('home', ['cart' => 'empty'])->with('success', 'Your order placed successfully...');
        }
    }

    public function cancel() {}

    public function refundPayment()
    {

        $stripe = new StripeClient(env('STRIPE_SECRET'));

        try {
            $refund = $stripe->refunds->create([
                'payment_intent' => 'pi_3PutIBRrTeEtlK900htpyISB',
                //'amount' => 300, 
                // no amount means full refund
            ]);

            dd($refund);

            return redirect()->back();
        } catch (\Exception $e) {
            echo $e;
        }
    }
}
