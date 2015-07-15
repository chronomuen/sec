<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $table = 'transactions';

    //RELATIONS------------------------------

	//The attributes that are mass assignable.
	protected $fillable = [
        'user_id',
        'username',
        'email',
        'firstname',
        'lastname',
        'department',
        'job_title',
        'password',
        'status',
        'user_type'
    ];
	
    //transaction has many logs
    public function log()
    {
        return $this->hasMany('App\Log', 'transaction_number', 'transaction_nuumber');
    }

}
