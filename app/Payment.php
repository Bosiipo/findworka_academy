<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    public function payment_status()
    {
        return $this->belongsTo(PaymentStatus::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('payment_status_id');
    }
}
