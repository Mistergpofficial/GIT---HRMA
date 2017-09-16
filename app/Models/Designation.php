<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{

    protected $table = 'designations';
    protected $fillable = ['id', 'name'];

    public function userDesignations()
    {
        return $this->hasMany('App\Models\UserDesignation', 'designation_id', 'id');
    }
}
