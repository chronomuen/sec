<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $table = 'departments';
    protected $primaryKey = 'department_id';

    //RELATIONS------------------------------

    //department has many users
    public function users()
    {
        return $this->hasMany('App\User', 'department_id', 'department_id');
    }

}
