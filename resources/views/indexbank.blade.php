@extends('master')

@section('title','Data Bank')

@section('konten')


	<h3>Data Bank</h3>

	<a href="/bank/tambah" class="btn btn-primary"> + Tambah Data Bank</a>
    <h3> </h3>

    <br/>
    <p>Cari Data Bank berdasarkan Merk:</p>
	<form action="/bank/cari" method="GET">
		<input class="form form-control" type="text" name="cari" placeholder="Cari Bank .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input class="btn btn-primary" type="submit" value="CARI">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
            <th>Kode Bank</th>
			<th>Merk Bank</th>
			<th>Jumlah Bank</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($bank as $b)
		<tr>
            <td>{{ $b->kodebank }}</td>
			<td>{{ $b->merkbank }}</td>
			<td>{{ $b->jumlahbank }}</td>
            @if ($b->jumlahbank > 0)
                <td>Y</td>
            @else <td>N</td>
            @endif
            <td>
                <a href="/bank/view/{{ $b->kodebank }}" class="btn btn-success">View</a>
                |
                <a href="/bank/edit/{{ $b->kodebank }}" class="btn btn-warning">Edit</a>
				|
				<a href="/bank/hapus/{{ $b->kodebank }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection


