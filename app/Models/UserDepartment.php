<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDepartment extends Model
{
    protected $table = 'user_departments';
    protected $fillable = ['id', 'user_id', 'department_id'];

    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
