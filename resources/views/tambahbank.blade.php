@extends('master')

@section('title','Data Bank')

@section('konten')


	<h3>Data Bank</h3>

	<a href="/bank" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/bank/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merkbank" class="col-sm-2 col-form-label">Merk Bank</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="merkbank" name="merkbank" placeholder="Masukkan merk bank">
            </div>
        </div>

        <div class="form-group row">
            <label for="jumlahbank" class="col-sm-2 col-form-label">Jumlah Bank</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="jumlahbank" name="jumlahbank" placeholder="Masukkan jumlah bank">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" value="Simpan Data">Simpan Data</button>
            </div>
        </div>
        </form>

@endsection



