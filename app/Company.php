<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['user_id', 'name', 'address', 'phone'];

    public function user()
    {
    	return $this->belongsTo('App/users', 'user_id');
    }
}
