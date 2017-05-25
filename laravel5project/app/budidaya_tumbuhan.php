<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class budidaya_tumbuhan extends Model
{
    protected $table = 'budidaya_tumbuhan';
    protected $guarded='id';
    protected $fillable = ['tumbuhan_id','budidaya_id'];

     public function tumbuhan()
    {
    	return $this->belongsTo(tumbuhan::class);
    }

     public function budidaya()
    {
    	return $this->belongsTo(budidaya::class);
    }
}