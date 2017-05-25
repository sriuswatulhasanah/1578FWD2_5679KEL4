<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

//use Illuminate\Auth\Authenticatable;

//use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

//use Illuminate\Database\Eloquent\Model;

//class pengguna extends Model implements AuthenticatableContract
class pengguna extends Authenticatable
{
	//use Authenticatable;
	
    protected $table = 'pengguna';
    protected $fillable = ['username','password','level'];

    public function pengelola()
    {
    	return $this->hasOne(pengelola::class);
    }

}