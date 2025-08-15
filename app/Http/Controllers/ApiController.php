<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function check(Request $request) {
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            dd('not');
        }
        return dd( $user->subscription());
    }
}
