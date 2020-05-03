<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('assignment_id', 'status');
    }

    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }
}
