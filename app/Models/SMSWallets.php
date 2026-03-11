<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SMSWallets extends Model
{
    protected $table = 'sms_wallets';

    protected $fillable = [
        'client_id',
        'subscription_id',
        'balance',
    ];

    public function client()
    {
        return $this->belongsTo(Clients::class);
    }

    public function subscription()
    {
        return $this->belongsTo(Subscriptions::class);
    }
}
