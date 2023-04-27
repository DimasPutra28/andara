@extends('layouts.main')
@section('dimas')

    <!-- content -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" ></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/content.png" class="d-block w-100" alt="0">
            </div>
            <div class="carousel-item">
              <img src="img/content2.png" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
              <img src="img/content3.png" class="d-block w-100" alt="2">
            </div>
        </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- End content -->

    <!-- card -->
    <section id="fitur">
        <div class="row" style="margin: 0 20px 43px 19px">
            <div class="col-lg-4">
                <div class="card text-center" >
                    <div class="card-body mb-2">
                        <h1>PERIKSA GIGI </h1>
                        <img src="img/gigi.png" style="height: 220px" alt="">
                        <div>
                            <a class="btn btn-light mt-4 text-center" style="background-color: #B1B2FF; border-radius: 10px; height: 50px; width: 300px; color: white;
                            font-family: 'Open Sans'; font-weight: 900; font-size: 25px " href="#">PERIKSA</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-center" >
                    <div class="card-body mb-2">
                        <h1>DOKTER GIGI </h1>
                        <img src="img/dokter.png" style="height: 220px" alt="">
                        <div>
                            <a class="btn btn-light mt-4 text-center" style="background-color: #B1B2FF; border-radius: 10px; height: 50px; width: 300px; color: white;
                            font-family: 'Open Sans'; font-weight: 900; font-size: 25px " href="#">CHAT DOKTER</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-center" >
                    <div class="card-body mb-2">
                        <h1>PASIEN BARU </h1>
                        <img src="img/pasien.png" style="height: 220px" alt="">
                        <div>
                            <a class="btn btn-light mt-4 text-center" style="background-color: #B1B2FF; border-radius: 10px; height: 50px; width: 300px; color: white;
                            font-family: 'Open Sans'; font-weight: 900; font-size: 25px " href="#">DAFTAR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End card -->
    <br>
    <br>

    <!-- artikel -->
    <section id="artikel" class="mb-5">
        <h1 class="ms-5" style="color: #AAC4FF">Artikel</h1>

        <div class="card ms-5 mb-3" style="width: 1602px; background-color: #B1B2FF; color: white;">
            <div class="card-body" style="margin: 5px 0 5px 0">
                <h5 class="card-title" style="padding-left: 264px; font-size: 30px; font-weight: 800">Gingivitis</h5>
                <div class="row">
                    <div class="col-lg-2">
                        <img src="img/artikel1.jpg" style="border-radius: 10px" alt="">
                    </div>
                    <div class="col-lg-10">
                        <p class="card-text" style="font-size: 35px">Kebanyakan topik yang dibahas jika berbicara tentang kesehatan gigi dan mulut adalah bagaimana menjaga agar gigi...</p>
                        <div class="d-flex justify-content-end">
                            <a class="me-4" style="text-decoration: none; color: white; font-size: 20px;" href="">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card ms-5 mb-3" style="width: 1602px; background-color: #B1B2FF; color: white;">
            <div class="card-body" style="margin: 5px 0 5px 0">
                <h5 class="card-title" style="padding-left: 264px; font-size: 30px; font-weight: 800">Wajib Tahu! 7 Fakta Tentang Gigi Palsu</h5>
                <div class="row">
                    <div class="col-lg-2">
                        <img src="img/artikel2.jpg" style="border-radius: 10px" alt="">
                    </div>
                    <div class="col-lg-10">
                        <p class="card-text" style="font-size: 35px">Pasti sedikit atau banyaknya Sobat pernah mendengar istilah ini: gigi palsu. Yap, gigi yang perannya untuk menggantikan...</p>
                        <div class="d-flex justify-content-end">
                            <a class="me-4" style="text-decoration: none; color: white; font-size: 20px;" href="">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card ms-5 mb-3" style="width: 1602px; background-color: #B1B2FF; color: white;">
            <div class="card-body" style="margin: 5px 0 5px 0">
                <h5 class="card-title" style="padding-left: 264px; font-size: 30px; font-weight: 800">Cegah Gigi Keropos Dengan 5 Langkah Ini</h5>
                <div class="row">
                    <div class="col-lg-2">
                        <img src="img/artikel3.jpg" style="border-radius: 10px" alt="">
                    </div>
                    <div class="col-lg-10">
                        <p class="card-text" style="font-size: 35px">Tentu Sobat sudah tahu dong, ya, bahwa gigi kita ini tersusun dari berbagai mineral seperti kalsium dan fosfat...</p>
                        <div class="d-flex justify-content-end">
                            <a class="me-4" style="text-decoration: none; color: white; font-size: 20px;" href="">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End artikel -->

@endsection
