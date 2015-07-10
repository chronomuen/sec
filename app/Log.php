<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    //
    protected $table = 'logs';

    //RELATIONS------------------------------

    //log belongs to one transaction
    public function transaction()
    {
        return $this->belongsTo('App\Transaction', 'transaction_number', 'transaction_nuumber');
    }

    //log belongs to one processor
    public function processor()
    {
        return $this->belongsTo('App\User', 'processor_id', 'user_id');
    }

}
