<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		$karyawan = DB::table('karyawan')->get();


    	// mengirim data pegawai ke view index
		return view('indexkaryawan',['karyawan' => $karyawan]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahkaryawan');

	}

	// method untuk insert data ke table pegawai

    public function store(Request $request)
    {
        $existingRecord = DB::table('karyawan')->where('kodepegawai', $request->kodepegawai)->first();

        if ($existingRecord) {
            // beri pesan kesalahan jika kodepegawai sudah ada
            return redirect('/karyawan')->with('error', 'Kode Pegawai sudah ada di tabel.');
        }
	// insert data ke table pegawai
	DB::table('karyawan')->insert([
        'kodepegawai' => $request->kodepegawai,
		'namalengkap' => strtoupper($request->namalengkap),
		'divisi' => $request->divisi,
		'departemen' => strtolower($request->departemen)

	]);
        return redirect('/karyawan')->with('success', 'Data Karyawan berhasil disimpan.');
    }



    // method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('karyawan')->where('kodepegawai',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');
	}


}
