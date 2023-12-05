<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangController extends Controller
{
	public function keranjang()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $keranjangbelanja = DB::table('keranjangbelanja')

                    ->paginate(10);

    	// mengirim data pegawai ke view index
		return view('keranjang',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah2()
	{

		// memanggil view tambah
		return view('tambah2');

	}

	// method untuk insert data ke table pegawai

    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('keranjangbelanja')->insert([
		'ID' => $request->kodepembelian,
		'KodeBarang' => $request->kodebarang,
		'Jumlah' => $request->jumlahpembelian,
		'Harga' => $request->hargaperitem
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/keranjangbelanja');

}


    // method untuk hapus data pegawai
	public function batal($ID)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$ID)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}

    public function rupiah($harga){

        $hasil_rupiah = "Rp " . number_format($harga,2,',','.');
        return $hasil_rupiah;

    }
    






}
