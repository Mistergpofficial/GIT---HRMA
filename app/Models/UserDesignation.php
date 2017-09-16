<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDesignation extends Model
{
    protected $table = 'user_designations';
    protected $fillable = ['id', 'user_id', 'designation_id'];

    public function designation()
    {
        return $this->belongsTo('App\Models\Designation');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
