<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $table = 'departments';

    //RELATIONS------------------------------

    //department has many users
    public function users()
    {
        return $this->hasMany('App\User', 'department', 'department_id');
    }

}
