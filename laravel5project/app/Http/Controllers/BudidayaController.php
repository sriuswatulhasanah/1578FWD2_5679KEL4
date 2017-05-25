<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\budidaya;

class BudidayaController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
     public function awal()
    {
        $semuaBudidaya = budidaya::all();
    	return view('budidaya.awal',compact("semuaBudidaya"));
    }
    public function budidayaawal()
    {
        $semuaBudidaya = budidaya::all();
        return view('userbudidaya.awal',compact('semuaBudidaya'));
    }
    public function tambah()
    {
        $budidaya = new budidaya;
    	return view('budidaya.tambah', compact('budidaya'));
    }
    public function simpan(Request $input)
    {
    	    $this->validate($input,[
    		'nama_budidaya'=>'required',
    		]);
    	$budidaya = new budidaya($input->only('nama_budidaya')); 
        
        if($budidaya->save()) $this->informasi = "Budidaya Berhasil Disimpan";
        return redirect('budidaya')->with(['informasi'=> $this->informasi]);
    }
    public function edit($id)
    {
    	$budidaya = budidaya::find($id);
        $budidaya_tumbuhan = new budidaya_tumbuhan; 
    	return view('budidaya.edit', compact('budidaya'));
    }
    public function lihat($id)
    {
    	$budidaya = budidaya::find($id);
    	return view('budidaya.lihat',compact("budidaya"));
    }
    public function budidayalihat($id)
    {
        $budidaya = budidaya::find($id);
        return view('userbudidaya.lihat',compact("budidaya"));
    }
    public function update($id, Request $input)
    {
    	$budidaya = budidaya::find($id);
        $budidaya->fill($input->only('nama_budidaya'));
        if($budidaya->save()) $this->informasi = "Budidaya Berhasil Diperbarui";
        return redirect('budidaya')->with(['informasi'=> $this->informasi]);
    }
    public function hapus($id,Request $input)
    {
    	$budidaya = budidaya::find($id);
        if($budidaya->delete()) $this->informasi = "Budidaya Berhasil Dihapus";
        return redirect('budidaya')->with(['informasi'=> $this->informasi]);
    }
}
