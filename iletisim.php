<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" type="text/css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <title>Furkan Can Zirek</title>
    <link href="allcss.css" type="text/css" rel="stylesheet" />
    <link rel="shortcut icon" href="http://www.iconj.com/ico/6/2/62mdc0zzps.ico" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark text-white navbar-expand-lg ">
        <div class="container py-2">
            <a href="" class="navbar-brand">Furkan Can Zirek</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-furkancanzirek"
                aria-controls="navbar-furkancanzirek">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-furkancanzirek">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item px-3">
                        <a href="hakkimda.html" class="nav-link text-white">Anasayfa</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="ozgecmis.html" class="nav-link text-white">Özgeçmiş</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="sehrim.html" class="nav-link text-white">Şehrim</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="takimimiz.html" class="nav-link text-white">Takımımız</a>
                    </li>
                    <li class="nav-item pl-3">
                        <a href="iletisim.php" class="nav-link text-white">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        function validateForm() {
            var x = document.forms["uye_formu"]["ad"].value;
            if (x == "") {
                alert("Ad Kısmı boş bırakılamaz!");
                return false;
            }
            var y = document.forms["uye_formu"]["soyad"].value;
            if (y == "") {
                alert("Soyad Kısmı boş bırakılamaz!");
                return false;
            }
            var z = document.forms["uye_formu"]["email"].value;
            if (z == "") {
                alert("E-Posta Kısmı boş bırakılamaz!");
                return false;
            }
            var w = document.forms["uye_formu"]["mesaj"].value;
            if (w == "") {
                alert("Mesaj boş bırakılamaz!");
                return false;
            }
        }

        function myFunction() {
            document.getElementById("uye_formu").reset();
        }
    </script>
    <div>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col">
                    <img class="img-fluid header animated pulse slow" src="youtube1.jpg" alt="">
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="iletisimozet.php" method="post" role="form" name="uye_formu" id="uye_formu" onsubmit="return validateForm()">
                    <h3 style="margin-bottom: 25px; text-align: center;">İletişim Formu</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="ad" placeholder="Ad">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="soyad" placeholder="Soyad">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="email" placeholder="E-Posta">
                    </div>
                    <div class="form-group">
                        <input class="mesaj" class="form-control" name="mesaj" type="text" placeholder="Mesaj">
                    </div>
                    <input type="submit" value="Gönder">
                    <input type="button" onclick="myFunction()" value="Formu Sıfırla">
                </form>
            </div>
            <div class="col-md-6" style="position:relative; margin-top: 10%;">
                <h3>Bu Sayfadaki İletişim Formundan Bana Ulaşabilirsiniz</h3>
            </div>
        </div>
        <footer class="page-footer bg-dark pt-4">


            <div class="container-fluid text-center text-md-left">


                <div class="row">


                    <div class="col-md-6 ">


                        <h5 class="text-uppercase text-white">Furkan Can Zirek'in Kişisel Web Sitesidir</h5>
                        <p class="text-white">Yanda yer alan linklerden detaylı bilgilere ulaşabilirsiniz</p>

                    </div>


                    <hr class="clearfix w-100 d-md-none pb-3">


                    <div class="col-md-6">


                        <h5 class="text-uppercase text-white">Sayfalar</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a class="text-white" href="hakkimda.html">Anasayfa</a>
                            </li>
                            <li>
                                <a class="text-white" href="ozgecmis.html">Özgeçmiş</a>
                            </li>
                            <li>
                                <a class="text-white" href="sehrim.html">Şehrim</a>
                            </li>
                            <li>
                                <a class="text-white" href="takimimiz.html">Takımımız</a>
                            </li>
                            <li>
                                <a class="text-white" href="iletisim.php">İletişim</a>
                            </li>
                        </ul>


                    </div>

                </div>


            </div>




        </footer>
    </div>
</body>


</html>