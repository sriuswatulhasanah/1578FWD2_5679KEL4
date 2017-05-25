<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pengguna;

use Illuminate\Auth\SessionGuard;

use Auth;

class penggunaSesiController extends Controller
{
    public function index() {
		if(\Auth::check()){
            if(\Auth::user()->level=="user"){
				return view("masteruser", ['user'=>pengguna::all()]);
			}
			elseif (\Auth::user()->level=="admin") {
				return view("master", ['user'=>pengguna::all()]);
			}		
		}
	}
	
	public function form() {
		if(Auth::check()) {
			return redirect('/');
		}
		return view('login');
	}

	public function validasi(Request $input) {
		$this->validate($input,[
			'username'=>'required',
			'password'=>'required',
			]);
		$pengguna = pengguna::where($input->only('username','password'))->first();
		if(! is_null($pengguna)) {
			Auth::login($pengguna);
			if(Auth::check())
				return redirect('/')->with('informasi',"Selamat Datang ".Auth::user()->username);
		}
				return redirect('/login')->withErrors(['pengguna tidak ditemukan']);
	}

	public function logout() {
		if(Auth::check()){
			Auth::logout();
				return redirect('/login')->withErrors(['Silahkan login untuk masuk ke sistem']);
		} else {
			return redirect('/login')->withErrors(['Silahkan login terlebih dahulu']);
		}
	}
}
