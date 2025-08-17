<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function plan()
    {
        if ($this->subscribed()) {
            return Plan::where('stripe_price_id', $this->subscription()->items->first()->stripe_price)->first();
        } elseif ($this->cbpSubscribed()) {
            return Plan::where('plan_id', CryptoBotPayment::where('user_id', $this->id)->latest()->first()->plan_id)->first();
        }
    }

    public function dateFinish()
    {
        if ($this->subscribed()) {
            $carbon = Carbon::parse($this->subscription()->items->first()->ends_at);
        } elseif ($this->cbpSubscribed()) {
            $carbon = Carbon::parse(CryptoBotPayment::where('user_id', $this->id)->latest()->first()->end);
        } else {
            return 'error';
        }

        return $carbon->format('Y-m-d H:i');
    }

    protected function cbpSubscribed()
    {
        $cbp = CryptoBotPayment::where('user_id', $this->id)->latest()->first();
        if ($cbp) {
            $end = Carbon::parse(CryptoBotPayment::where('user_id', $this->id)->latest()->first()->end);
            $now = Carbon::now();
            if ($now->lessThan($end)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function advancedSubscribed()
    {
        return ($this->subscribed() or $this->cbpSubscribed());
    }
//        return $this->subscription()->items->first()->updated_at->addDays(30)->format('Y-m-d H:i:s');
}



