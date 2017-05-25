<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\budidaya_tumbuhan;

use App\tumbuhan;

use App\budidaya;

class Budidaya_TumbuhanController extends Controller
{
    protected $guarded = ['id'];

    protected $informasi = 'Gagal Melakukan aksi';

    public function awal()
    {
        $semuaBudidayahTumbuhan = budidaya_tumbuhan::all();
    	return view('budidaya_tumbuhan.awal', compact('semuaBudidayahTumbuhan'));
    }
    public function tambah()
    {
        $tumbuhan = new tumbuhan;
        $budidaya = new budidaya;
    	return view('budidaya_tumbuhan.tambah',compact('tumbuhan','budidaya'));
    }
    public function simpan(Request $input)
    {
    	$this->validate($input,[
    		'tumbuhan_id'=>'required',
    		'budidaya_id'=>'required',
    		]);
    	$budidaya_tumbuhan = new budidaya_tumbuhan($input->only('tumbuhan_id','budidaya_id'));
        if($budidaya_tumbuhan->save()) $this->informasi = "budidaya tumbuhan Berhasil di simpan";
        return redirect('budidaya_tumbuhan')->with(['informasi' => $this->informasi]);
    }
    public function lihat($id)
    {
    	$budidaya_tumbuhan = budidaya_tumbuhan::find($id);
    	return view('budidaya_tumbuhan.lihat',compact('budidaya_tumbuhan'));
    }
    public function edit($id)
    {
    	$budidaya_tumbuhan = budidaya_tumbuhan::find($id);
        $tumbuhan = new tumbuhan;
        $budidaya = new budidaya;
    	return view('budidaya_tumbuhan.edit',compact('tumbuhan','budidaya','budidaya_tumbuhan'));
    }
    public function update($id, Request $input)
    {
    	$budidaya_tumbuhan = budidaya_tumbuhan::find($id);
    	$budidaya_tumbuhan->fill($input->only('tumbuhan_id','budidaya_id'));
    	if($budidaya_tumbuhan->save()) $this->informasi = "Budidaya Tumbuhan Berhasil diPerbaharui";
    	return redirect('budidaya_tumbuhan')->with(['informasi'=> $this->informasi]);
    }
    public function hapus($id,Request $input)
    {
    	$budidaya_tumbuhan = budidaya_tumbuhan::find($id);
        if($budidaya_tumbuhan->delete()) $this->informasi = "Budidaya Tumbuhan Berhasil dihapus";
    	return redirect('budidaya_tumbuhan')->with(['informasi'=> $this->informasi]);
    }
}
