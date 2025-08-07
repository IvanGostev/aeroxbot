<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function byeBase(Request $request) {
        $plan = Plan::where('Base', $request->name)->first();
        return $request->user()
            ->newSubscription('default', $plan->stripe_price_id)
            ->checkout([
                'success_url' => 'https://t.me/aeroxteam_bot',
                'cancel_url' => route('dashboard'),
            ]);
    }
    public function byePremium(Request $request) {
        $plan = Plan::where('Premium', $request->name)->first();
        return $request->user()
            ->newSubscription('default', $plan->stripe_price_id)
            ->checkout([
                'success_url' => 'https://t.me/aeroxteam_bot',
                'cancel_url' => route('dashboard'),
            ]);
    }
}
