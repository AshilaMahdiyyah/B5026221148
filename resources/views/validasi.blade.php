<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script>
        function validateForm(){
            var nrp = document.getElementById("nrp");

            //cek hanya yg invalid
            if(nrp.value == ""){
                nrp.focus();
                nrp.placeholder = "contoh : 5026221148"
                alert("NRP harus diisi!");
                return false;
            }
            //harus 10 digit
            //selain 10, invalid
            if (nrp.value.length != 10){
                nrp.focus();
                alert("NRP harus 10 digit, Anda memasukkan " + nrp.value.length + " digit");
                return false;
            }
            //yang ada abjad a..z invalid
            if (isNaN(nrp.value) == true){ //true jika ada unsur abjad, false jika angka semua

                nrp.focus();
                msg.innerHTML = "NRP harus angka"; //InnerHTML mengubah tulisan dalam tag
                return false;
            }
        }
    </script>
    </head>

    <body>
        <div class = "container">
            <div class = "jumbotron">Form validasi adalah mencegah pengiriman data ke server jika ada yang invalid atau tidak sesuai constraint database.</div>
            <script>
                function validate(){
                    console.log("baris 22");
                    return false;
                    console.log("baris 24");
                    return true;
                    console.log("baris 26");
                    return false;
//defaultnya return function adalah true
                }
            </script>
            <form action="https://google.com" method="get" onsubmit="return validateForm();">
                <div class="form-group">
                    <label for="nrp">NRP :</label>
                    <input type="text" class="form-control" id="nrp"><div id = "msg"
                    class="text-danger"></div>
                  </div>
                  <input type="submit" value="DAFTAR" class="btn btn-primary">
                  <input type="reset" value="ULANGI" class="btn btn-warning">
            </form>
        </div>
    </body>
    </html>
