<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    //
    protected $table = 'logs';

    protected $fillable = [
        'transaction_id',
        'processor_name',
        'status',
        'remarks',
        'date_received',
        'date_released',
        'next_processor'
    ];

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
