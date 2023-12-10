@extends('master')

@section('title','Data Bank')

@section('konten')


	<h3>Edit Data Bank</h3>

	<a href="/bank" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($bank as $b)
	<form action="/bank/update" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <input type="hidden" name="id" value="{{ $b->kodebank }}"> <br/>

        <div class="form-group row">
            <label for="merkbank" class="col-sm-2 col-form-label">Merk Bank</label>
            <div class="col-sm-8">
                <input type="text" required="required" class="form-control" id="merkbank" name="merkbank" value="{{ $b->merkbank }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="jumlahbank" class="col-sm-2 col-form-label">Jumlah Bank</label>
            <div class="col-sm-8">
                <input type="number" required="required" class="form-control" id="jumlahbank" name="jumlahbank" value="{{ $b->jumlahbank }}">
            </div>
        </div>


        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" value="Simpan Data">Simpan Data</button>
            </div>
        </div>
    </form>
    @endforeach
    @endsection

