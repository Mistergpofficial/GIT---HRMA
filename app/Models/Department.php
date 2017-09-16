<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';
    protected $fillable = ['id', 'name'];

    public function userDepartments()
    {
        return $this->hasMany('App\Models\UserDepartment', 'department_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    
}
