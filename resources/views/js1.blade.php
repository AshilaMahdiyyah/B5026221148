<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script>
        function changeText() {
        var span = document.getElementById("output");
        var textbox = document.getElementById("textbox");

        textbox.style.color = "red";
        textbox.style.fontSize = "13pt";
        textbox.style.fontFamily = "Comic Sans MS";
        span.className = "text-success"; //langsung ganti 1 class

        span.innerHTML = textbox.value;
        hadiah();
    }
    </script>
    </head>


    <body>
        <div class = "container-fluid">
            <script>
                function hadiah()
                {
                    alert("Selamat, Anda mendapatkan tiket konser NCT!");
                }
            </script>
            <center><button class="btn btn-primary" onclick="hadiah();">Klik Disini!</button></center>
            <br>
            <button onclick="changeText();" class="btn btn-success">Click me!</button>
            <span id="output" class="text-dark">replace me</span>
            <input id="textbox" type="text" class="form-control" />
    </body>

</html>
