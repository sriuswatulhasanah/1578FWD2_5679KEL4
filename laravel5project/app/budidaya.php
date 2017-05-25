<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class budidaya extends Model
{
    protected $table = 'budidaya';
    protected $fillable = ['nama_budidaya'];

    public function budidaya_tumbuhan()
    {
    	return $this->belongsToMany(budidaya_tumbuhan::class);
    }
    
}
?>