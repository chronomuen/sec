<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuperAdmin extends Model
{
    //
    protected $table = 'users';
    protected static $singleTableType = 'SuperAdmin';

}
