<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\tumbuhan;

use App\jenis;

use App\kategori;

use App\tempat;

use App\pengelola;

class TumbuhanController extends Controller
{
    protected $guarded = ['id'];

    protected $informasi = 'Gagal Melakukan aksi';

    public function awal()
    {
        $semuaTumbuhan = tumbuhan::all();
    	return view('tumbuhan.awal',compact('semuaTumbuhan'));
    }
    public function tambah()
    {
        $jenis = new jenis;
        $kategori = new kategori;
        $tempat = new tempat;
        $pengelola = new pengelola;
    	return view('tumbuhan.tambah',compact('jenis','kategori','tempat','pengelola'));
    }
    public function simpan(Request $input)
    {
    	$this->validate($input,[
    		'nama'=>'required',
    		'jenis_id'=>'required',
            'kategori_id'=>'required',
            'tempat_id'=>'required',
            'pengelola_id'=>'required',
    		]);
    	$tumbuhan = new tumbuhan($input->only('jenis_id','nama','kategori_id','tempat_id','pengelola_id'));
        if($tumbuhan->save()) $this->informasi = "Tumbuhan Berhasil disimpan";
    	return redirect('tumbuhan')->with(['informasi'=> $this->informasi]);
    }
    public function lihat($id)
    {
    	$tumbuhan = tumbuhan::find($id);
    	return view('tumbuhan.lihat',compact('tumbuhan'));
    }
    public function edit($id)
    {
    	$tumbuhan = tumbuhan::find($id);
        $jenis = new jenis;
        $kategori = new kategori;
        $tempat = new tempat;
        $pengelola = new pengelola;
    	return view('tumbuhan.edit',compact('jenis','kategori','tempat','pengelola','tumbuhan'));
    }
    public function update($id, Request $input)
    {
    	$tumbuhan = tumbuhan::find($id);
        $tumbuhan->fill($input->only('jenis_id','kategori_id','tempat_id','pengelola_id'));
        if($tumbuhan->save()) $this->informasi = "Tumbuhan Berhasil di perbarui";
        return redirect('tumbuhan')->with(['informasi' => $this->informasi]);
    }
    public function hapus($id, Request $input)
    {
    	$tumbuhan = tumbuhan::find($id);
        if($tumbuhan->delete()) $this->informasi = "Tumbuhan Berhasil di hapus";
    	return redirect('tumbuhan')->with(['informasi'=> $this->informasi]);
    }
}
