<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $table = 'transactions';

    //RELATIONS------------------------------

    //transaction has many logs
    public function log()
    {
        return $this->hasMany('App\Log', 'transaction_number', 'transaction_nuumber');
    }

}
