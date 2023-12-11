@extends('master')

@section('title','Data Karyawan')

@section('konten')

	<h3>Data Karyawan Baru</h3>

	<a href="/karyawan" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

	<form action="/karyawan/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="kodepegawai" name="kodepegawai">
            </div>
        </div>

        <div class="form-group row">
            <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="namalengkap" name="namalengkap">
            </div>
        </div>

        <div class="form-group row">
            <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="divisi" name="divisi">
            </div>
        </div>

        <div class="form-group row">
            <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="departemen" name="departemen">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" value="Simpan Data">Simpan Data</button>
            </div>
        </div>
        </form>

@endsection



