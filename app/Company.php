<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company', 'pincode',
    ];

    /**
     * Get the user associated with the company.
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
