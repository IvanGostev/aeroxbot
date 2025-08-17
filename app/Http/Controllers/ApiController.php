<?php

namespace App\Http\Controllers;

use App\Models\CryptoBotPayment;
use App\Models\Plan;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ApiController extends Controller
{
    protected $password = 'jdBsJLTP9Sh8n2pr';

    protected function auth($password)
    {
        if ($this->password == $password) {
            return true;
        } else {
            return false;
        }
    }

    public function check(Request $request)
    {
        $all = $request->all();
        try {
            if (!$this->auth($all['password'])) {
                throw new Exception();
            }
            $user = User::where('email', $all['email'])->first();
            if (!$user) {
                throw new Exception();
            }
            if ($user->advancedSubscribed()) {
                return response()->json(['status' => $user->plan()->name, 'expired' => $user->dateFinish()]);
            } else {
                throw new Exception();
            }
        } catch (\Exception $e) {
            return response()->json('error');
        }


    }

    public function subscribe(Request $request)
    {

        $all = $request->all();

        DB::beginTransaction();
        try {
            if (!$this->auth($all['password'])) {
                throw new Exception();
            }

            $data['plan_id'] = Plan::where('name', ucfirst($all['status']))->first()->id;
            $user = User::where('email', $all['email'])->first();
            if (!$user) {
                $user = User::create([
                    'email' => $all['email'],
                    'password' => Str::password()
                ]);
            }
            $data['user_id'] = $user->id;
            $data['end'] = Carbon::parse($all['date'])->toDateString();
            CryptoBotPayment::create($data);

            DB::commit();
            return response()->json(['status' => 'ok']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['status' => 'error']);
        }

    }

    public function test() {

    }
    # чекнуть какая подписка будет первой после покупки двух подряд
    #
}
