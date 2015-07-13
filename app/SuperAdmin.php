<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Phaza\SingleTableInheritance\SingleTableInheritanceTrait;

class Superadmin extends User
{
    //
    protected static $singleTableType = 'Superadmin';

}
