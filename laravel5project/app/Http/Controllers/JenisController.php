<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\jenis;

class JenisController extends Controller
{
    public function awal()
    {
    	return view('jenis.awal', ['data'=>jenis::all()]);
    }
    public function tambah()
    {
    	return view('jenis.tambah');
    }
    public function simpan(Request $input)
    {
    	     $this->validate($input,[
    		'jenis'=>'required',
        ]);
    	$jenis = new jenis;
    	$jenis->jenis = $input->jenis;
    	
    	$informasi = $jenis->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
    	return redirect('jenis')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
    	$jenis = jenis::find($id);
    	return view('jenis.edit')->with(array('jenis'=>$jenis));
    }
    public function lihat($id)
    {
    	$jenis = jenis::find($id);
    	return view('jenis.lihat')->with(array('jenis'=>$jenis));
    }
    public function update($id, Request $input)
    {
    	$jenis = jenis::find($id);
    	$jenis->jenis = $input->jenis;
    	
    	$informasi = $jenis->save() ? 'Berhasil update data' : 'Gagal update data';
    	return redirect('jenis')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
    	$jenis = jenis::find($id);
    	$informasi = $jenis->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
    	return redirect('jenis')->with(['informasi'=>$informasi]);
    }
}
