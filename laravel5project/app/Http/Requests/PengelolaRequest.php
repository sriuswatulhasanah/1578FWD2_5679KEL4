<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PengelolaRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       $validasi = [
        'nama'=>'required',
        'nik'=>'required',
        'jeniskelamin'=>'required',
        'alamat'=>'required',
        'username'=>'required',
        'level'=>'required'
        ];
        if ($this->is('Pengelola/tambah')) {
            $validasi['password']='required';
        }
        return $validasi; 
    }
}
?>