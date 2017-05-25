<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tumbuhan extends Model
{
    protected $table = 'tumbuhan';
    protected $fillable = ['nama','jenis_id','kategori_id','tempat_id','pengelola_id'];

    public function pengelola()
    {
    	return $this->belongsTo(pengelola::class);
    }

    public function jenis()
    {
    	return $this->belongsTo(jenis::class);
    }

    public function kategori()
    {
    	return $this->belongsTo(kategori::class);
    }

    public function tempat()
    {
    	return $this->belongsTo(tempat::class);
    }

    public function budidaya_tumbuhan()
    {
    	return $this->belongsToMany(budidaya_tumbuhan::class);
    }
}
?>