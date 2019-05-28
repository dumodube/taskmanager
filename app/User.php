<?php

namespace TodoMaster;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';

    protected $fillable = [
        'email',
        'name',
        'password',
        'username',
    ];


    public function getName(){

        if($this->name){
            return "{$this->name}";
        }
    
            return null;
        }
    
        public function getNameOrUsername(){
            return $this->getName() ?: $this->username;
        }
}
