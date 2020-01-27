<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Siswacontroller extends Controller
{
    public function index(){
    	$data_siswa = \App\Siswa::all();
    	return view('siswa.index',['data_siswa'=>$data_siswa]);
    }
    public function create(Request $request){
    	\App\Siswa::create($request->all());
    	return redirect('/siswa')->with('sukses','Data berhasil diinput');
    }

    public function edit($id){
    	$data_siswa = \App\Siswa::find($id);
    	return view('siswa/edit',['data_siswa'=>$data_siswa]);
    }
    public function update(Request $request,$id){
    	$data_siswa = \App\Siswa::find($id);
    	$data_siswa->update($request->all());
    	return redirect('/siswa')->with('sukses','Data berhasil diedit');
    }
    public function delete($id){
    	$data_siswa = \App\Siswa::find($id);
    	$data_siswa->delete($data_siswa);
    	return redirect('/siswa')->with('sukses','Data berhasil dihapus');
    }
}
