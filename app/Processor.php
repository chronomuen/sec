<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Phaza\SingleTableInheritance\SingleTableInheritanceTrait;

class Processor extends User
{
    //
    protected $table = 'users';
    protected static $singleTableType = 'processor';

}
