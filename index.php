<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- navbar -->
    <!-- As a heading -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 center">Panel Gilang</span>
        </div>
    </nav>


    <div class="pad">
        <div class="card">
            <h3 class="putih">Ladang Cuan?</h3>
            <p class="putih">Cuan Cuan Cuan</p>
        </div>
        <!-- https://telegra.ph/file/eb4d5b4481424481fd2a0.png -->
        <div class="card">
            <img src="https://c4.wallpaperflare.com/wallpaper/142/751/831/landscape-anime-digital-art-fantasy-art-wallpaper-preview.jpg" class="card-img"></img>
        </div>
        <!-- Result  -->
        <div class="card">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="input-group">
                        <span class="input-group-text btn btn-dark" id="basic-addon1"><i class="bi bi-send-fill"></i></span>
                        <input type="text" class="form-control" id="result" aria-label="Username" aria-describedby="basic-addon1" readonly>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="input-group">
                        <span class="input-group-text btn btn-dark" id="basic-addon1"><i class="bi bi-envelope-fill"></i></span>
                        <input type="text" class="form-control" id="email" aria-label="Username" aria-describedby="basic-addon1" readonly>
                        <span class="input-group-text btn btn-dark" id="visit"></span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text btn btn-dark" id="basic-addon1"><i class="bi bi-google"></i></span>
                        <input type="text" class="form-control" id="sender" aria-label="Username" aria-describedby="basic-addon1" readonly>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Update date
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <!-- result edit -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Date</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <input type="text" id="cresult" class="form-control" placeholder="Masukan Result Baru" autocomplete="off">
                            </div>
                            <div class="col-md-4 mb-3">
                                <input type="email" id="cemail" class="form-control" placeholder="Masukan Email Baru" autocomplete="off">
                            </div>
                            <div class="col-md-4 mb-3">
                                <input type="email" id="csender" class="form-control" placeholder="Masukan Sender Baru" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="btnsv">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script>
        $.ajax({
            url: 'lang/data.json',
            type: 'get',
            success: function(data) {
                // result update
                $('#cemail').val(data.email)
                $('#cresult').val(data.nama)
                $('#csender').val(data.sender)
                // result read
                $('#email').val(data.email)
                $('#result').val(data.nama)
                $('#sender').val(data.sender)
                document.getElementById("visit").innerText = data.totals
            }
        })
        $('#btnsv').click(function() {
            $.post("./langAction/update.php", {
                email: $('#cemail').val(),
                nama: $('#cresult').val(),
                sender: $('#csender').val(),

            }, function(data) {
                if (ngE = "SuksesSuksesSukses") {
                    $("#email").val($('#cemail').val());
                    // $("#currentResult").html(0);
                }
                // console.log(ngE)
            })
        })
    </script>
</body>

</html>