<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class CobaController extends Controller
{
    //di sini isi controller pegawai
  //    public function index(){
  // 	//membuat string variabel 
  //   	$nama = "Diki Alfarabi Hadi";
  //   // membuat variabel array
		// $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
 	// //view('namaview', ['nama variabel' =>diisi variabel yang dideklarasikan, ['nama variabel' =>diisi variabel yang dideklarasikan lain ])
  //   	return view('form',['nama' => $nama , 'matkul' => $pelajaran]);

  //   }
 
    // public function index($nama){
 
    // 	return $nama;
 
    // }
    
    public function formulir(){
 
    	return view('form');
 
	}

	public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
	}
}