<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BankController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $bank = DB::table('bank')->get();


    	// mengirim data pegawai ke view index
		return view('indexbank',['bank' => $bank]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahbank');

	}

	// method untuk insert data ke table pegawai

    public function store(Request $request)
    {
        $jumlahbank = $request->jumlahbank;
        $tersedia = ($jumlahbank > 0) ? 'Y' : 'N';

	// insert data ke table pegawai
	DB::table('bank')->insert([
		'merkbank' => $request->merkbank,
		'jumlahbank' => $jumlahbank,
		'tersedia' => $tersedia

	]);
	// alihkan halaman ke halaman bank
	return redirect('/bank');

}

	// method untuk editbank data bank
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$bank = DB::table('bank')->where('kodebank',$id)->get();

		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editbank',['bank' => $bank]);

	}

	// update data pegawai
	public function update(Request $request)
	{
        $jumlahbank = $request->jumlahbank;
        $tersedia = ($jumlahbank > 0) ? 'Y' : 'N';
		// update data pegawai
		DB::table('bank')->where('kodebank',$request->id)->update([
			'merkbank' => $request->merkbank,
			'jumlahbank' => $jumlahbank,
			'tersedia' => $tersedia

		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/bank');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('bank')->where('kodebank',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/bank');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$bank = DB::table('bank')
		        ->where('merkbank','like',"%".$cari."%")
		        ->paginate();

    		// mengirim data pegawai ke view index
		return view('indexbank',['bank' => $bank]);

	}


    //view
    // method untuk view data pegawai
    public function view($id)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
	$bank = DB::table('bank')->where('kodebank',$id)->get();
	// passing data pegawai yang didapat ke view view.blade.php
    return view('lihatbank',['bank' => $bank]);


    }







}
