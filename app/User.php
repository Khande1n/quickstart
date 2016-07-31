<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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
     * Get the company of the user.
     */
    public function companies()
    {
        return $this->belongsTo('App\Company');
    }

    /**
     * Get the role of the user.
     */
    public function roles()
    {
        return $this->belongsTo('App\Role');
    }

    /**
     * Get all the quizzes given by the user.
     */
    public function quizzes()
    {
        return $this->belongsToMany('App\Quiz');
    }

    /**
     * Get all of the user's score.
     */
    public function scores()
    {
        return $this->morphMany('App\Score', 'likeable');
    }

}
