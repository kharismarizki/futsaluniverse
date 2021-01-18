<?php
require 'src/function.php';
$tambah = new Action();

if (isset($_POST["submit"])) {

    //cek apakah data berhasil ditambah atau tidak
    if ($tambahdata = $tambah->Tambahdata($_POST) == true) {
        echo "
        <script>
        alert('berhasil diBooking');
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Gagal diBooking');
        </script>
        ";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>FUTSAL UNIVERSE</title>
    <link rel="icon" href="img/futsal universe 1.png">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- jsnya -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="assets/dist/js/bootstrap.bundle.js"></script>
    <script src="assets/dist/js/galery.js"></script>

    <!-- Bootstrap CSS -->
    <link href="assets/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/fontawesome/css/all.min.css">

    <style>
        h2 {
            font-family: Arial, Helvetica, sans-serif;

        }

        hr.divider {
            max-width: 8rem;
            border-width: 0.2rem;
            border-color: #000000;
        }

        .mb-4,
        .my-4 {
            margin-bottom: 1.5rem !important;
        }

        .mt-4,
        .my-4 {
            margin-top: 1rem !important;
        }

        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        user agent stylesheet hr {
            display: block;
            -webkit-margin-before: 0.5em;
            -webkit-margin-after: 0.5em;
            -webkit-margin-start: auto;
            -webkit-margin-end: auto;
            border-style: inset;
            border-width: 1px;
        }


        .contact-form {

            margin-bottom: 5%;
            width: 70%;
        }

        .contact-form .form-control {
            border-radius: 1rem;
        }

        .contact-form form {
            padding: 14%;
        }

        .contact-form form .row {
            margin-bottom: -7%;
        }

        .contact-form .btnContact {
            width: 50%;
            border: none;
            border-radius: 1rem;
            padding: 1.5%;
            font-weight: 600;

            cursor: pointer;
        }
    </style>
    <link rel="stylesheet" href="assets/dist/css/galery.css">
    <link rel="stylesheet" href="assets/dist/css/footer.css">
    <!-- CSS e dewe -->
    <link href="carousel.css" rel="stylesheet">



</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <!-- Image and text -->
            <a class="navbar-brand" href="#" style="font-family: curvise;">
                <img src="img/q1.png" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                Futsal Universe
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""></span>Menu
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active" href="index.php">Home</a>
                    <a class="nav-link" href="#booking">Booking</a>
                    <a class="nav-link " href="#jadwal">Jadwal</a>
                    <a class="nav-link " href="#galery">Galery</a>
                    <a class="nav-link" href="#contact">Contact Us</a>
                    <a class="nav-link" href="page-admin.php">Admin</a>
                </div>
            </div>
        </div>
    </nav>


    <main role="main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/2.jpg" alt="">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Booking</h1>
                            <p>Booking lapangan futsal jadi lebih mudah hanya dimanapun dan kapanpun</p>
                            <p><a class="btn btn-lg btn-primary" href="#booking" role="button">Booking</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/slide 1.jpg" alt="" class="">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Langkah Pembayaran</h1>
                            <p>Untuk pembayaran sangatlah mudah, yuk kita lihat</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Cara Bayar</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/slide3.jpg" alt="">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>FASILITAS</h1>
                            <p>Kita memeliki beberapa fasilitas yuk lihat di galery kita</p>
                            <p><a class="btn btn-lg btn-primary" href="#galery" role="button">Buka gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <!-- card -->
        <div class="container">
            <h2 class="text-center text-uppercase font-weight-bold">Pemilihan Lapangan</h2>
            <hr class="divider my-4">
            <div class="row" id="1">
                <div class="col-md-4 ">
                    <div class="card">
                        <img src="img/lapijo.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <div class="card-title">
                                <h4>Lapangan 1</h4>
                            </div>
                            Lapangan Matras
                        </div>
                        <button type="button" class="btn btn-dark">Pesan</button>
                    </div>
                </div>

                <div class="col-md-4 ">
                    <div class="card">
                        <img src="img/lapbiru.jpg" class="card-img-top" alt="...">

                        <div class="card-body text-center">
                            <div class="card-title">
                                <h4>Lapangan 2</h4>
                            </div>
                            Lapangan Tanpa Rumput
                        </div>
                        <button type="button" class="btn btn-dark">Pesan</button>
                    </div>
                </div>

                <div class="col-md-4 ">
                    <div class="card">
                        <img src="img/OIP.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <div class="card-title">
                                <h4>Lapangan 1</h4>
                            </div>
                            Lapangan Dengan Rumput
                        </div>
                        <button type="button" class="btn btn-dark">Pesan</button>
                    </div>
                </div>
            </div>


            <!-- collapse jadwal -->
            <div class="container">
                <div class="accordion" id="accordionExample">
                    <div class="header-jadwal">
                        <h2 class="text-center text-uppercase font-weight-bold mt-5 mt-lg-5" id="jadwal">cari Jadwal
                            Futsal</h2>
                        <hr class="divider my-4">
                    </div>

                    <div class="row ">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <select class="custom-select" id="validationDefault04" name="#" id="#" required>
                                <option selected disabled value="">Pilih Lapangan</option>
                                <option>Lapangan 1</option>
                                <option>Lapangan 2</option>
                                <option>Lapangan 3</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="custom-select" id="validationDefault04" name="#" id="&" required>
                                <option selected disabled value="">Pilih Hari</option>
                                <option>Senin</option>
                                <option>Selasa</option>
                                <option>Rabu</option>
                                <option>Kamis</option>
                                <option>Jumat</option>
                                <option>Sabtu</option>
                                <option>Minggu</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="custom-select" id="validationDefault06" name="#" id="#" required>
                                <option selected disabled value="">Mulai Jam</option>
                                <option>13:00</option>
                                <option>14:00</option>
                                <option>15:00</option>
                                <option>16:00</option>
                                <option>17:00</option>
                                <option>18:00</option>
                                <option>19:00</option>
                                <option>20:00</option>
                                <option>21:00</option>
                                <option>22:00</option>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapselapangan" aria-expanded="false" aria-controls="collapselapangan">Cari</button>
                        </div>
                    </div><br>
                    <!-- end cari -->
                    <div class="collapse" id="collapselapangan">
                        <div class="container">
                            <table class="table" style="text-align: center;">
                                <thead class="table-dark">
                                    <th>LAPANGAN</th>
                                    <th>HARI</th>
                                    <th>DURASI</th>
                                </thead>
                                <tbody>

                                </tbody>

                            </table>
                        </div>
                    </div>
                    <!-- Booking -->
                    <form id="booking" action="" method="post">
                        <h2 class="text-center text-uppercase font-weight-bold mt-lg-5 mt-5">Pemesanan Lapangan
                            Futsal
                        </h2>
                        <hr class="divider my-4">
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault01">Nama</label>
                                <input type="text" class="form-control" id="validationDefault01" placeholder="Masukkan Nama" name="nama" id="nama" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationDefault02">Nomer WA</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+62</span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="Masukkan Nomor Anda" aria-label="Username" aria-describedby="basic-addon1" name="wa" id="wa" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="validationDefault03">Nama TIM</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama TIM" id="validationDefault03" name="tim" id="tim" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationDefault04">Pilih Lapangan</label>
                                <select class="custom-select" id="validationDefault04" name="lapangan" id="lapangan" required>
                                    <option selected disabled value="">Pilih Lapangan</option>
                                    <option>Lapangan 1</option>
                                    <option>Lapangan 2</option>
                                    <option>Lapangan 3</option>
                                </select>
                            </div>
                            <div class="col-md-2 mb-2">
                                <label for="validationDefault04">Pilih Hari</label>
                                <select class="custom-select" id="validationDefault04" name="hari" id="hari" required>
                                    <option selected disabled value="">Pilih Hari</option>
                                    <option>Senin</option>
                                    <option>Selasa</option>
                                    <option>Rabu</option>
                                    <option>Kamis</option>
                                    <option>Jumat</option>
                                    <option>Sabtu</option>
                                    <option>Minggu</option>
                                </select>
                            </div>
                            <div class="col-md-2 mb-2">
                                <label for="validationDefault05">Durasi</label>
                                <select class="custom-select" id="validationDefault05" name="durasi" id="durasi" required>
                                    <option selected disabled value="">Berapa Jam</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                            <div class="col-md-2 mb-2">
                                <label for="validationDefault06">Mulai Main</label>
                                <select class="custom-select" id="validationDefault06" name="mulai_jam" id="mulai_jam" required>
                                    <option selected disabled value="">Mulai Jam</option>
                                    <option>13:00</option>
                                    <option>14:00</option>
                                    <option>15:00</option>
                                    <option>16:00</option>
                                    <option>17:00</option>
                                    <option>18:00</option>
                                    <option>19:00</option>
                                    <option>20:00</option>
                                    <option>21:00</option>
                                    <option>22:00</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                <label class="form-check-label" for="invalidCheck2">
                                    SETUJU
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-dark" type="submit" name="submit">Booking</button>
                    </form>



                    <!-- end booking -->


                    <!-- Galery -->
                    <h2 class="text-center text-uppercase font-weight-bold mt-lg-5 mt-5" id="galery">Galery</h2>
                    <hr class="divider my-4">
                    <div class="row">
                        <div class="column">
                            <img src="img/slide1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                        </div>
                        <div class="column">
                            <img src="img/lapbiruGallery.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                        </div>
                        <div class="column">
                            <img src="img/slide3.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                        </div>
                        <div class="column">
                            <img src="img/lapijoGallery.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                        </div>
                    </div>

                    <div id="myModal" class="modal">

                        <div class="modal-content">

                            <div class="mySlides">
                                <div class="numbertext">1 / 4</div>
                                <img src="img/slide1.jpg" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">2 / 4</div>
                                <img src="img/lapbiruGallery.jpg" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">3 / 4</div>
                                <img src="img/slide3.jpg" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">4 / 4</div>
                                <img src="img/lapijoGallery.jpg" style="width:100%">
                            </div>
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                            <span class=" close cursor" onclick="closeModal()">&times;</span>
                            <div class="caption-container">
                                <p id="caption"></p>
                            </div>
                            <div class="row">
                                <div class="container-flui">
                                    <div class="column">
                                        <img class="demo cursor" src="img/slide1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
                                    </div>
                                    <div class="column">
                                        <img class="demo cursor" src="img/lapbiruGallery.jpg" style="width:100%" onclick="currentSlide(2)" alt="Snow">
                                    </div>
                                    <div class="column">
                                        <img class="demo cursor" src="img/slide3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                                    </div>
                                    <div class="column">
                                        <img class="demo cursor" src="img/lapijoGallery.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- contact us -->
                <div class="container contact-form">
                    <form method="post">
                        <h2 class="text-uppercase font-weight-bold text-center " id="contact">Hubungi Kami</h2>
                        <hr class="divider my-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="txtName" class="form-control" placeholder="Nama " value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtEmail" class="form-control" placeholder="Email " value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtPhone" class="form-control" placeholder="No Telepon " value="" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="btnSubmit" class="btnContact btn-dark" value="Kirim">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea name="txtMsg" class="form-control" placeholder="Pesan" style="width: 100%; height: 150px;"></textarea>
                                </div>
                                <div class="form-group">
                                    <i class="fab fa-facebook-square" aria-hidden="true"></i>
                                    <i class="fab fa-instagram    "></i>
                                    <i class="fab fa-youtube" aria-hidden="true"></i>
                                    <i class="fab fa-github" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Footer -->
                <div class="mt-5 pt-5 pb-5 footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-xs-12 about-company">
                                <h2>Futsal Universe</h2>
                                <p class="pr-5 text-white-50">Sebuah aplikasi untuk melakukan booking online
                                    lapangan
                                    futsal.
                                </p>
                                <p><a href="#"><i class="fab fa-facebook-square mr-3"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in mr-3"></i></a>
                                    <a href="#"><i class="fab fa-instagram  mr-3"></i></a>
                                </p>
                            </div>
                            <div class="col-lg-3 col-xs-12 links">
                                <h4 class="mt-lg-0 mt-sm-3">Links</h4>
                                <ul class="m-0 p-0">
                                    <li>- <a href="#">Booking</a></li>
                                    <li>- <a href="#">Jadwal</a></li>
                                    <li>- <a href="#">Galeri</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-xs-12 location">
                                <h4 class="mt-lg-0 mt-sm-4">Location</h4>
                                <p>Jl. Pluto No.51, Lemahbangkulon, Kec. Singojuruh, Kab. Banyuwangi 68464</p>
                                <p class="mb-0"><i class="fa fa-phone mr-3"></i>(086) 754-3010</p>
                                <p><i class="fa fa-envelope mr-3"></i>info@futsaluniverse.com</p>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col copyright">
                                <p class=""><small class="text-white-50">© 2010-<?php echo date("Y"); ?>. All Rights
                                        Reserved.</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
    </main>

    <script src="assets/dist/js/jquery-3.2.1.min.js"></script>
    <script src="assets/dist/js/anime.2.2.0.js"></script>
</body>

</html>