@extends('master')

@section('title','Informasi Bank')

@section('konten')


	<h2 class="text-center">Informasi Bank</h2><br>

	<a href="/bank" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

        @foreach($bank as $b)
        {{--<form action="/bank/update" method="post" class="form-horizontal">--}}
            <div class="container">
                <div class="d-flex justify-content-center">
                    <div class="col-sm-7">
                        <div class="card-group" style="height: 400px">
                            <div class="card bg-dark">
                                <div class="card-body text-center">


                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <p class="card-text">Kode: {{ $b->kodebank }}</p>
                                    <p class="card-text">Merk: {{ $b->merkbank }}</p>
                                    <p class="card-text">Jumlah: {{ $b->jumlahbank }}</p>
                                    <p class="card-text">Tersedia: {{ $b->tersedia }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endsection









