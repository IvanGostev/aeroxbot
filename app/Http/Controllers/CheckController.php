<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function subscribe(Request $request) {
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return 0;
        }
        return $user->subscription();
    }
}
