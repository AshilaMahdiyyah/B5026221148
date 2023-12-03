@extends('master')

@section('title','Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

    <style>
        /* Tambahkan CSS sesuai kebutuhan Anda */
        .profile-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .profile-container .profile-picture {
            flex: 1;
            text-align: center;
        }

        .profile-container .profile-picture img {
            width: 100%;
            max-height: 100%;
            border-radius: 10px;
            object-fit: cover;
        }

        .profile-container .divider {
            border-right: 1px solid #ccc;
            margin: 0 20px;
        }

        .profile-container .employee-data {
            flex: 1;
        }

        .employee-data form {
            /* tambahkan gaya form jika diperlukan */
        }

        .centered-submit {
            text-align: center;
        }
        .submit-button {
            margin-left: 100px; /* Sesuaikan dengan jumlah margin yang diinginkan */
        }

    </style>
</head>
<body>

<div class="profile-container">
    <div class="profile-picture">
        {{-- Kotak untuk foto profil --}}
        <div style="width: 500px; height: 500px; background-color: #ddd; border-radius: 10px; overflow: hidden; position: relative;">
            {{-- Tambahkan tag img untuk menampilkan foto profil jika ada --}}
            {{-- <img src="{{ asset('path/to/profile-picture.jpg') }}" alt="Foto Profil"> --}}
        </div>
    </div>

    <div class="divider"></div>

    <div class="employee-data">
        {{-- Formulir untuk mengedit data pegawai --}}
        @foreach($pegawai as $p)
        <form action="/pegawai/update" method="post" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group row">
                <label for="id" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="id" name="id" value="{{ $p->pegawai_id }}" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" required="required" class="form-control" id="nama" name="nama" value="{{ $p->pegawai_nama }}" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" required="required" class="form-control" id="jabatan" name="jabatan" value="{{ $p->pegawai_jabatan }}" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                <div class="col-sm-10">
                    <input type="number" required="required" class="form-control" id="umur" name="umur" value="{{ $p->pegawai_umur }}" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea input type="text" required="required" class="form-control" id="alamat" name="alamat" readonly>{{ $p->pegawai_alamat }}</textarea>
                </div>
            </div>

            <div class="form-group row centered-submit submit-button">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" value="Simpan Data">OK</button>
                </div>
            </div>
        </form>
        @endforeach
    </div>
</div>



@endsection
