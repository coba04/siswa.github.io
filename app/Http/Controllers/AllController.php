<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Ruang;
use Session;

class AllController extends Controller
{
    //
    public function index(){
        if(Auth::check()){
        return view('beranda');
    } else {
        return redirect()->route('login');
    }
}
public function ruang(){
    $data=Ruang::all();
    return view('ruang.index')->with([
        'data'=>$data
    ]);
}
public function jenis(){
    return view('jenis.index');
}
public function inventais(){
    return view('inventaris.index');
}

public function simpanruang(Request $req){
    $this->validate($req, [
        'nama'=>'required',
        'kode'=>'required',
        'keterangan'=>'required',
    ]);
    $simpan=new Ruang();
    $simpan->nama_ruang=$req['nama'];
    $simpan->kode_ruang=$req['kode'];
    $simpan->keterangan=$req['keterangan'];
    $simpan->save();
    Session::flash('pesan','Data Berhasil Disimpan');
    return redirect()->route('ruang.index');
}
}
