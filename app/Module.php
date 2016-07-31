<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'module',
    ];

    /**
     * Get the training to which the module belongs.
     */
    public function trainings()
    {
        return $this->belongsTo('App\Training');
    }

    /**
     * Get the quizzes of the module.
     */
    public function quizzes()
    {
        return $this->hasMany('App\Quiz');
    }
}
