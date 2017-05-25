<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pengelola;

use App\pengguna;

use App\Http\Requests\PengelolaRequest;

class PengelolaController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';

     public function awal()
    {
        $semuaPengelola = pengelola::all();
    	return view('pengelola.awal',compact("semuaPengelola"));
    }
    public function pengelolaawal()
    {
        $semuaPengelola = pengelola::all();
        return view('userpengelola.awal',compact('semuaPengelola'));
    }
    public function tambah()
    {
    	return view('pengelola.tambah');
    }
    public function simpan(Request $input)
    {
    	$this->validate($input,[
    		'nama'=>'required',
    		'nik'=>'required',
    		'jeniskelamin'=>'required',
            'alamat'=>'required',
            'username'=>'required',
            'password'=>'required',
            'level'=>'required',
    		]);
        $pengguna = new pengguna($input->only('username','password','level'));
        if ($pengguna->save()) {
    	$pengelola = new pengelola;
    	$pengelola->nama = $input->nama;
    	$pengelola->nik = $input->nik;
    	$pengelola->jeniskelamin = $input->jeniskelamin;
    	$pengelola->alamat = $input->alamat;
    	if ($pengguna->pengelola()->save($pengelola))
            $this->informasi = 'Berhasil Simpan Data';
        }
    return redirect('pengelola')->with(['informasi'=> $this->informasi]);
    }
    public function edit($id)
    {
    	$pengelola = pengelola::find($id);
    	return view('pengelola.edit')->with(array('pengelola'=>$pengelola));
    }
    public function lihat($id)
    {
    	$pengelola = pengelola::find($id);
    	return view('pengelola.lihat')->with(array('pengelola'=>$pengelola));
    }
    public function pengelolalihat($id)
    {
        $pengelola = pengelola::find($id);
        return view('userpengelola.lihat')->with(array('pengelola'=>$pengelola));
    }
    public function update($id, Request $input)
    {
    	$pengelola = pengelola::find($id);
    	$pengelola->nama = $input->nama;
    	$pengelola->nik = $input->nik;
    	$pengelola->jeniskelamin = $input->jeniskelamin;
    	$pengelola->alamat = $input->alamat;
    	$pengelola->save();
        if(!is_null($input->username)){
            $pengguna = $pengelola->pengguna->fill($input->only('username'));
            if(!empty($input->password)) $pengguna->password = $input->password;
            if(!empty($input->level)) $pengguna->level = $input->level;
            if($pengguna->save()) $this->informasi = 'Berhasil Simpan Data';
        }else{
            $this->informasi = 'Berhasil Simpan data';
        }
        return redirect('pengelola')->with(['informasi' => $this->informasi]);
    }
    public function hapus($id)
    {
    	$pengelola = pengelola::find($id);
    	if($pengelola->pengguna()->delete()) {
            if($pengelola->delete()) $this->informasi = 'Berhasil hapus data';
    }
    return redirect('pengelola')->with(['informasi' => $this->informasi]);
	}
}
