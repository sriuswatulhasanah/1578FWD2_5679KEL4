<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\berita;

use App\pengelola;

class BeritaController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
     public function awal()
    {
        $semuaBerita = berita::all();
    	return view('berita.awal',compact('semuaBerita'));
    }
    public function beritaawal()
    {
        $semuaBerita = berita::all();
        return view('userberita.awal',compact('semuaBerita'));
    }

    public function tambah()
    {
        $berita = new berita;
    	return view('berita.tambah', compact('berita'));
    }
    public function simpan(Request $input)
    {
    	$this->validate($input,[
    		'judul'=>'required',
    		'isi'=>'required',
            'photo'=>'required',
    		]);

        $file = $input->file('photo');
        $fileName = 'BERITA_'.rand(111111111, 999999999)."_".$file->getClientOriginalName();
        $input->file('photo')->move("gambar/",$fileName);

        $berita = new berita();
        $berita->pengelola_id = $input->pengelola_id;
        $berita->judul = $input->judul;
        $berita->isi = $input->isi;
        $berita->photo = $fileName;

        if ($berita->save()) $this->informasi = "Berita Berhasil Disimpan";
        return redirect('berita')->with(['informasi' => $this->informasi]);
    }
    public function detail_berita($id){
        $berita = berita::find($id);
        $listberita = berita::OrderBy('created_at','desc')->take(5)->get();
        return view('layouts.detail_berita',['berita'=>$listberita,'berita'=>$berita]);

    }
    public function edit($id)
    {
        $berita = berita::find($id);
        $pengelola = pengelola::find($id);
    	return view('berita.edit', compact('berita','pengelola'));
    }
    public function lihat($id)
    {
    	$berita = berita::find($id);
    	return view('berita.lihat',compact("berita"));
    }
    public function beritalihat($id)
    {
        $berita = berita::find($id);
        return view('userberita.lihat',compact("berita"));
    }
    public function update($id, Request $input)
    {
    	$berita = berita::find($id);
    	$berita->fill($input->only('nama_berita','isi','photo'));
        if($berita->save()) $this->informasi = "Berita Berhasil Diperbarui";
        return redirect('berita')->with(['informasi'=> $this->informasi]);
    }
    public function hapus($id, Request $input)
    {
    	$berita = berita::find($id);
        if ($berita->delete()) $this->informasi = "Berita Berhasil Dihapus";
        return redirect('berita')->with(['informasi' => $this->informasi]);
    }
}
