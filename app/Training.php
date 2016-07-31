<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class training extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'training',
    ];

    /**
     * Get the training associated with the role.
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    /**
     * Get the module associated with the training.
     */
    public function modules()
    {
        return $this->hasMany('App\Module');
    }

}
