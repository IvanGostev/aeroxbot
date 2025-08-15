<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function byeBase(Request $request) {
        $plan = Plan::where('name', 'Base')->first();
        return $request->user()
            ->newSubscription('default', $plan->stripe_price_id)
            ->checkout([
                'success_url' => 'https://t.me/aeroxteam_bot',
                'cancel_url' => route('profile'),
            ]);
    }
    public function byePremium(Request $request) {
        $plan = Plan::where('name', 'Premium')->first();
        return $request->user()
            ->newSubscription('default', $plan->stripe_price_id)
            ->checkout([
                'success_url' => 'https://t.me/aeroxteam_bot',
                'cancel_url' => route('profile'),
            ]);
    }
}
