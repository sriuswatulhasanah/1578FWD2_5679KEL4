<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengelola extends Model
{
    protected $table = 'pengelola';
    protected $fillable = ['nama','nik','jeniskelamin','alamat','pengguna_id'];

    public function berita()
    {
    	return $this->hasMany(berita::class); 
    }

    public function tumbuhan()
    {
    	return $this->hasMany(tumbuhan::class);
    }

    public function pengguna()
    {
    	return $this->belongsTo(pengguna::class);
    }

    public function getUsernameAttribute()
    {
    	return $this->pengguna->username;
    } 

    public function getLevelAttribute()
    {
    	return $this->pengguna->level;
    }
    
}
?>