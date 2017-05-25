<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['kategori'];

    public function tumbuhan()
    {
    	return $this->hasMany(tumbuhan::class);

    }
}
