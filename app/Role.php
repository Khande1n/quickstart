<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role',
    ];

    /**
     * Get the user with the role.
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }

    /**
     * Get the training associated with the role.
     */
    public function trainings()
    {
        return $this->belongsToMany('App\Training');
    }

}
