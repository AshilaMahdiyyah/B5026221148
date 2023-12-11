@extends('master')

@section('title','Data Pegawai')

@section('konten')

	<h3>Data Karyawan</h3>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif


	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
			<th>Action</th>
		</tr>
		@foreach($karyawan as $k)
		<tr>
			<td>{{ $k->kodepegawai }}</td>
			<td>{{ strtoupper($k->namalengkap) }}</td>
			<td>{{ $k->divisi }}</td>
			<td>{{ strtolower($k->departemen) }}</td>
			<td>
				<a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>


		@endforeach
	</table>
    <a href="/karyawan/tambah" class="btn btn-primary"> + Tambah Karyawan Baru</a>
@endsection


