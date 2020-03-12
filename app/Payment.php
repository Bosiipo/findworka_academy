<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function payment_type()
    {
        return $this->belongsTo(Payment_type::class);
    }
}
