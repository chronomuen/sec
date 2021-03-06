<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $table = 'transactions';
    protected $primaryKey = 'transaction_id';

    protected $fillable = [
        'transaction_id',
        'type',
        'client',
        'status',
        'password',
        'date_submitted'
    ];

    //RELATIONS------------------------------

    //transaction has many logs
    public function log()
    {
        return $this->hasMany('App\Log', 'transaction_id', 'transaction_id');
    }

}
