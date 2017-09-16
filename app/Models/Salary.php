<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table = 'salaries';
    protected $fillable = ['id', 'user_id', 'basic_salary', 'transport', 'housing', 'dressing', 'domestic', 'education', 'furniture', 'utilities', 'lunch', 'tax', 'gsm', 'nhf' ];

    public function user()
    {
        return $this->belongsTo('\App\User::class');
    }

    public function userSalaries()
    {
        return $this->hasMany('App\Models\UserSalary');
    }

    public function getRouteKeyName()
    {
        # gimme the tag where the name column is same as what is passed
        return 'full_name';
    }


}
