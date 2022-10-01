<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\Models\User;
use Stripe;
use Session;
use Exception;

class SubscriptionController extends Controller
{
    public function retrievePlans() {

        $key = config('services.stripe.secret');
        $stripe = new \Stripe\StripeClient($key);
        $plansraw = $stripe->plans->all();
        $plans = $plansraw->data;
       
        foreach($plans as $plan) {
            $prod = $stripe->products->retrieve(
               $plan->product,[]
            );
            $plan->product = $prod;
        }
        return $plans;
    }

    public function showSubscription()
    {
        $user = auth()->user();
        if ($user->subscribed('default')) {
            return redirect('/')->with('msg', 'You are already subscribed');
        }

        $plans = $this->retrievePlans();

        return view('subscription', [
            'user' => $user,
            'intent' => $user->createSetupIntent(),
            'plans' => $plans
        ]);
   }

   public function processSubscription(Request $request)
   {
        $user = auth()->user();
        $paymentMethod = $request->input('payment_method');
                   
        $user->createOrGetStripeCustomer();
        $user->addPaymentMethod($paymentMethod);
        $plan = $request->input('plan');

        try {
            $user->newSubscription('default', $plan)
                ->create($paymentMethod, [
                    'email' => $user->email
                ]
            );
        } catch (\Exception $e) {
            return back()->withErrors(['message' => 'Error creating subscription. ' . $e->getMessage()]);
        }

        return redirect('/')->with('msg', 'You\'ve subscribed to default plan successfully');
    }

    public function subscribedUsers()
    {
        $users = User::has('subscriptions')->with('subscriptions')->get();
        return view('users.subscribed', compact('users'));
    }
}