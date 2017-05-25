<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tempat extends Model
{
    protected $table = 'tempat';
    protected $fillable = ['nama_tempat','alamat'];

    public function tunbuhan()
    {
    	return $this->hasMany(tumbuhan::class);
    }
}
?>