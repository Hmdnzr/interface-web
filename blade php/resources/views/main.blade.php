<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-5.1.3-dist/css/bootstrap.css') }}">

    <link rel="icon" href="/asset/Asset/media/Logo-UHAMKA-Hanya-Logo-Utama.png" type="#">

    <link rel="stylesheet" type="text/css" href="{!! asset('style.css') !!}">

    <title>Tim Cyber BPTI</title>

</head>

<body>
    <!-- Navigasi bar -->
    <div class="col-12" style="background: #e0e0e0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width: 100%; position: fixed; display:block;">
        <div class="container-fluid ">
            <div class="header-right">
                <img class="logo rounded-circle" height="60px" src="/asset/Asset/media/Logo-UHAMKA-Hanya-Logo-Utama.png"
                    alt="">
                <button type="button" class="btn"> Tim Cyber BPTI Uhamka</button>
            </div>

            <div class="header-left">

                <button class="navbar-toggler nav-item" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://api.whatsapp.com/send/?phone=6287726269479&text&type=phone_number&app_absent=0">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://bpti.uhamka.ac.id/history/">Tentang kami</a>
                        </li>
                        <li class="nav-item">
                            <div class="d-grid gap-2 d-md-block">
                                <button class="btn btn-danger" type="button"><a href="{{'login'}}" class="bg-danger"
                                    style="color:aliceblue;">Login</a></button>
                                <button class="btn btn-primary" type="button"><a href="/signin" class="bg-primary "
                                        style="color:aliceblue;">Daftar</a></button>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


    </nav>
</div>

    <!-- Isi  content  1 -->
    <div class="container-fluid bg-success py-lg-5 "
        style="background-image: url(bg2.jpg); display: flex; width: auto; max-height:1500px;">
        <div class="container ">
            <div class="row">
                <div class="col-sm-12 text-center text-light">
                    <br><br>
                    <h1 id="home"> SELAMAT DATANG <br> DI WEBSITE TIM CYBER BPTI UHAMKA </h1>
                    <br><br><br>
                    <p>Tim cyber uhamka BPTI uhamka adalah divisi IT yang bergerak didalam bidang Web development dalam
                        lingkup pengembangan keamanan sistem,
                        fitur-fitur didalam sistem, design sistem, dan indexing SEO google untuk website yang dipakai
                        oleh seluruh civitas akademika untuk mengoptimalkan
                        kegiatan belajar-mengajar mahasiswa maupun dosen agar dapat mencapai tujuan kegiatan visi misi
                        universitas muhammadiyah profesor DR Hamka
                    </p>
                </div>
                <div class="col-sm-12">
                    <p>.</p>
                </div>
                <div class="col-12">
                    <p>.</p>
                </div>
                <div class="col-12">
                    <p>.</p>
                </div>

            </div>
        </div>
    </div>
    <!-- isi content 2 -->
    <div class="container-fluid">
        <div class="contairner">
            <div class="row">
                <img class="col-sm-12 img-fluid p-5" src="/asset/Asset/media/struktur.png" alt="struktur organisasi">
            </div>
        </div>
    </div>
    
    <!-- Isi content 3 -->

    <div class="container-fluid ">
        <div class="container py-15">
            <div class="row">
                <div class="col-sm-12 py-5 text-center">
                    <h2>Job-desk Tim</h2>
                </div>
                <div class="card col-sm-3 " id="card">
                    <img style="height: 305px; width: 305px;" class="card-img-top" src="/asset/card1.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Keamanan Sistem</h4>
                        <p class="card-text">Keamanan informasi adalah perlindungan terhadap segala jenis sumber daya
                            informasi dari penyalahgunaan pihak yang tak berwenang mengelolanya.[1] Tujuan pembuatan
                            sistem keamanan informasi adalah mencegah penyalahgunaan informasi oleh pihak yang tidak
                            berkepentingan atau tidak berhak mengelola informasi tersebut. Keamanan informasi terbentuk
                            secara alami karena sifat sistem informasi yang umumnya hanya dapat diberikan hak
                            pengelolaannya kepada pihak-pihak tertentu.</p>

                    </div>
                </div>
                <div class="card col-sm-3 " id="card">
                    <img style="height: 305px; width: 305px;" class="card-img-top" src="/asset/card2.jpeg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Pengembangan sistem</h4>
                        <p class="card-text">penyusunan suatu sistem yang baru untuk menggantikan sistem yang lama
                            secara keseluruhan atau memperbaiki sistem yang telah ada. Pengembangan sistem tentunya
                            harus didukung oleh personal-personal yang kompeten di bidangnya.
                        </p>

                    </div>
                </div>
                <div class="card col-sm-3 " id="card">
                    <img style="height: 305px; width: 305px;" class="card-img-top" src="/asset/card3.PNG" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Desain Sistem</h4>
                        <p class="card-text">Tahap setelah analisis dari siklus pengembangan sistem: pendefinisian dari
                            kebutuhan-kebutuhan fungsional dan persiapan untuk rancang bangun implementasi;
                            menggambarkan bagaimana suatu sistem dibentuk.</p>

                    </div>
                </div>
                <div class="card col-sm-3 " id="card">
                    <img style="height: 305px; width: 305px;" class="card-img-top bg-success" src="/asset/card4.png"
                        alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Search engine optimaliasasi</h4>
                        <p class="card-text">SEO adalah kependekan dari “search engine optimization.” Teknik ini
                            merupakan upaya mengoptimasi website agar mendapat ranking teratas di hasil pencarian
                            Google.
                            Dengan search engine optimization, situs akan mudah orang temukan sehingga berpotensi
                            menyedot lebih banyak traffic.
                        </p>

                    </div>
                </div>
                <div class="col-sm-12">
                    <p>.</p>
                </div>

            </div>
        </div>
    </div>
    <!-- isi konten lanjutan -->
    <div class="container-fluid text-center bg-success">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                <h1>Media Tim cyber</h1>
                <h4>Galeri kegiatan </h4>
                </div>
            </div>
        </div>
    </div>

    <!-- isi content 4 -->
    <div class="row" id="galeri">
        <div class="col-sm-3" style="float: left;">
            <img src="/asset/Asset/media/2.jpg" class="rounded" alt="Cinque Terre" style="width: 100%; position: relative; float: left;">
            <p class="text-contents" style="font-size: medium;">Kegiatan evaluasi refrering domain ranking Ahref</p>
        </div>
        
        <div class="col-sm-6" style="float: left;">
            <img src="/asset/Asset/media/8.jpg" class="rounded" alt="Cinque Terre" style="width: 100%; position: relative; float: left;">
            <p class="text-contents p-2" style="font-size: medium;">Kegiatan Evaluasi pemeringkatan webometric & 4ICU </p>
        </div>
        
        <div class="col-sm-3" style="float: left;">
            <img src="/asset/Asset/media/9.jpg" class="rounded" alt="Cinque Terre" style="width: 100%; position: relative; float: left;">
            <p class="text-contents" style="font-size: medium;">Kegiatan Persiapan WEBO METRIC Ranking universitas</p>
        </div>
    </div><br><br>

    <!-- isi content gakeri -->
    <div class="container-fluid" style="background-color:rgb(36, 36, 48);">
        <div class="container">
            <div class="row">
                <div class="galeri-video">
                    <h3 class="col-12 text-light p-5 text-center text-Light">PENGENALAN BPTI UHAMKA</h3><br>

                    <video class="col-6 offset-3 p-10 align-items-center" controls style="width: 55%; height:auto;">
                        <source src="/asset/Asset/media/profile_bpti.mp4" type="video/mp4">
                    </video><br><br>
                </div>
            </div>
        </div>
    </div>
    <!--Footer dari website-->

    <div id="footer" class="bg-black ">
        <div class="container text-center ">
            <div class="card-body "><img src="/asset/Asset/media/p1.PNG" alt="pict" style="border-radius: 50px;
                background: #e0e0e0;
                box-shadow: inset -25px -25px 50px #a4a4a4,
                            inset 25px 25px 50px #ffffff;"></div>
            <p class="text-muted credit text-light " style="color:#fff;background: rgb(42, 42, 245) ;margin-left: 40%; margin-right: 40%;">Created By <br></p>
                <p class="bg-light rounded-3 mx-5" >Click Mygithub Here<a href="https://github.com/Hmdnzr" class="bg-light text-primary"> Hamdan Zulfa Rais</a>
            <br>  2003015034
            <br>  Teknik informatika
            <br>  5B
            <br>  Passionate in Network and Software Engineer</p>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>
</body>

</html>