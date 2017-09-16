<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $fillable = ['id', 'company_name', 'company_logo', 'email', 'company_address', 'city', 'country', 'state', 'phonenum', 'alt_phonenum', 'website'];

    public function users()
    {
    	return $this->hasMany('App\User');
    }
}
