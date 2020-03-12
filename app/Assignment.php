<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function submission()
    {
        return $this->hasMany(Submission::class);
    }
}
