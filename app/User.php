<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function courses()
    {
        return $this->belongsToMany(Courses::class);
    }

    public function assignments()
    {
        return $this->belongsToMany(Assignment::class);
    }

    public function submissions()
    {
        return $this->belongsToMany(Submission::class)->withPivot('assignment_id', 'status');
    }

    // public function payments()
    // {
    //     return $this->hasManyThrough(Payment::class, CourseUser::class, 'user_id', 'id');
    // }

    public function payments()
    {
        return $this->belongsToMany(Payment::class)->withPivot('payment_status_id');
    }
}
