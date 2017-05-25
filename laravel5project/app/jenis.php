<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    protected $table = 'jenis';
    protected $fillable = ['jenis'];

    public function tunbuhan()
    {
    	return $this->hasMany(tumbuhan::class);
    }

}
?>