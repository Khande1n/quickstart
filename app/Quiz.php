<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quiz',
    ];

    /**
     * Get the module to which the quiz belongs.
     */
    public function modules()
    {
        return $this->belongsTo('App\Module');
    }

    /**
     * Get all the users of the quiz.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * Get all of the quiz's score.
     */
    public function scores()
    {
        return $this->morphMany('App\Score', 'likeable');
    }
}
