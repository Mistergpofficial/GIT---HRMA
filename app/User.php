<?php

namespace App;
use App\Models;

use App\Notifications\PasswordReset;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'full_name', 'email', 'password', 'phonenum', 'designation_id', 'department_id'];

    
   /* public function department()
    {
        return $this->hasOne('App\Models\Department');
    }*/

      public function userDepartments()
    {
        return $this->hasOne(\App\Models\UserDepartment::class, 'user_id', 'id');
    }

    /*public function designation()
    {
        return $this->hasOne('App\Models\Designation');
    }*/

    public function userDesignations()
    {
        return $this->hasOne(\App\Models\UserDesignation::class, 'user_id', 'id');
    }

    public function salary()
    {
        return $this->hasOne('App\Models\Salary');
    }

     public function userSalaries()
    {
        return $this->hasOne(\App\Models\UserSalary::class, 'user_id', 'id');
    }

    public function profile()
    {
        return $this->belongsTo('App\Models\Profile');
    }


   /* public function getPasswordAttribute($value)
    {
        return decrypt($value);
    }
*/

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PasswordReset($token));
    }
}
