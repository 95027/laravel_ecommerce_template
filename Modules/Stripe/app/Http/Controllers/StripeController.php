<?php

namespace Modules\Stripe\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\StripeClient;

class StripeController extends Controller
{
    protected $stripe;

    public function __construct(){

        $this->stripe = new StripeClient(env('STRIPE_SECRET'));

    }


    public function payment(Request $request){

        $response = $this->stripe->checkout->sessions->create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'inr',
                        'product_data' => ['name' => 'ecommerce'],
                        'unit_amount' => 100* 100,
                    ],
                    'quantity' => 1,

                ],
            ],
            'mode' => 'payment',
            'success_url' => route('stripe.success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('stripe.cancel'),
        ]);

        if(isset($response->id) && $response->id != ''){
            return redirect($response->url);
        }

        return redirect()->route('stripe.cancel');


         }

    public function success(Request $request){

        if(isset($request->session_id)){
            $session = $this->stripe->checkout->sessions->retrieve($request->session_id);
        }

        dd($session);

    }

    public function cancel(Request $request){

        dd($request);

    }

    public function refund(){

    }

}
