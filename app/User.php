<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    //The database table used by the model.
    protected $table = 'users';

    //The attributes that are mass assignable.
    protected $fillable = ['name', 'email', 'password'];

    //The attributes excluded from the model's JSON form.
    protected $hidden = ['password', 'remember_token'];

    //RELATIONS-----------------------------------------

    //user belongs to department
    public function department()
    {
        return $this->belongsTo('App\Department', 'department', 'department_id');
    }

    //user has many logs
    public function log()
    {
        return $this->hasMany('App\Log', 'processor_id', 'user_id');
    }


    //SINGLE TABLE INHERITANCE SETUP -------------------

    //for single table inheritance, to assignuser type
    public function __construct($attributes = array())
    {
       parent::__construct($attributes);
       $this->setAttribute('user_type',get_class($this));
    }

    //so that querying will only use class name
    public function newQuery($excludeDeleted = true)
    {
        $builder = parent::newQuery($excludeDeleted);
        // If I am using STI, and I am not the base class,
        // then filter on the class name.
        if ('User' !== get_class($this)) {
            $builder->where('user_type',"=",get_class($this));
        }
        return $builder;
    }

    //to make sure correct class is returned
    public function newFromBuilder($attributes = array())
    {
        if ($attributes->user_type) {
          $class = $attributes->user_type;
          $instance = new $class;
          $instance->exists = true;
          $instance->setRawAttributes((array) $attributes, true);
          return $instance;
        } else {
          return parent::newFromBuilder($attributes);
        }
    }


}
