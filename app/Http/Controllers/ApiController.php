<?php

namespace App\Http\Controllers;

use App\Models\CryptoBotPayment;
use App\Models\Plan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function check(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json('not');
        }
        if ($user->subscribed()) {
            return response()->json(['status' => $user->plan()->name, 'expired' => $user->dateFinish()]);
        } else {
            return response()->json('not');

        }
    }

    public function subscribe(Request $request)
    {
        $all = $request->all();

        if ($all['password'] = 'jdBsJLTP9Sh8n2pr') {
            $data['plan_id'] = Plan::where('name', ucfirst($all['status']))->first()->id;
            $data['end'] = Carbon::parse($all['date'])->toDateString();
//2018-06-15 17:34:15.984512
            $cbp = CryptoBotPayment::create($data);
            if ($cbp) {
                return response()->json(['status' => 'ok']);
            } else {
                return response()->json(['status' => 'not']);
            }
        } else {
            return response()->json(['status' => 'not']);
        }

    }
}
