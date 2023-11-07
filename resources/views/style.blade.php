<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<!-- div di seluruh halaman ini, di set seperti i block-->
<link rel="stylesheet" href="mystyle.css">
    <style>
        div {
            color : green ;
            font-weight: bold;
            text-align: right ;
        }
        .judulhalaman {
            text-align: center ;
            font-size: large ;
        }
    </style>
<body>
    <div class="judulhalaman">Selamat Datang</div>
    <!-- Inline CSS , digunakan ketika ada spesifik ke 1 bagian saja-->
    <p style="text-decoration: line-through;color:red;">Hallo apa Kabar ?</p>
    <!-- Inpage CSS , digunakan ketika ada yg spesifik ke 1 halaman khusus-->
    <div>Hallo apa Kabar ?</div>
    <!-- External CSS, digunakan untuk format umum 1 website-->
    <span>Hallo apa Kabar ?</span>
    <p>Bagian terakhir</p>
    <p style="color:red;">This is a red paragraph.</p>

</body>
</html>
