<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Phaza\SingleTableInheritance\SingleTableInheritanceTrait;

class SuperAdmin extends User
{
    //
    protected $table = 'users';
    protected static $singleTableType = 'superadmin';

}
