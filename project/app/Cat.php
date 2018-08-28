<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'dob', 'breed_id',
    ];

    public function breed()
    {
    	return $this->belongsTo('App\Breed');
    }
}
