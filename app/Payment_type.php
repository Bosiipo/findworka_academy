<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_type extends Model
{
    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
}
