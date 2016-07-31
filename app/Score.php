<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class score extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'score',
    ];

    /**
     * Get all of the owning likeable models.
     */
    public function likeable()
    {
        return $this->morphTo();
    }
}
