<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserSalary extends Model
{
    protected $table = 'user_salaries';
    protected $fillable = ['id', 'user_id'];

    public function salary()
    {
        return $this->belongsTo('App\Models\Salary');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

   /* public function getTotalPrice($id)
    {
     return $this->salary()->sum(DB::raw('tax + 1'));
    }*/



}

