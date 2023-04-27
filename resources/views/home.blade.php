<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Andara Dental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
{{-- <div class="loader"></div> --}}

    <!-- header -->
    <nav class="navbar bg-body-tertiary" style="">
        <div class="container-fluid justify-content-between" style="background-color: #AAC4FF">
            <div class="row">
                <a class="navbar-brand" href="#" style="padding: 10px 0 10px 0">
                    <img src="img/logo.png" alt="" width="100" height="50" class="d-inline-block align-text-top">
                </a>
            </div>
            <div class="row" style="margin-right: 200px">
                <ul>
                    <li style="margin-right: 30px;"><a href="/" style="color: rgb(23, 11, 183); text-decoration: none">Beranda</a></li>
                    <li class="dropdown"><a style="color: rgb(23, 11, 183); text-decoration: none" href="#"><span>User</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="" class="bi bi-person-fill" style="padding-right: 120px; text-decoration: none"> Login</a></li>
                            <li><a href="/ubahpassword" class="bi bi-key-fill" style="padding-right: 45px; text-decoration: none">Register</a></li>
                            {{-- <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button class="dropdown-item bi bi-box-arrow-right" style="padding-right: 112px">Keluar</button>
                                </form>
                            </li> --}}
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- End header -->

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
        <div class="row" style="margin: 0 20px 43px 120px">
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
                            font-family: 'Open Sans'; font-weight: 900; font-size: 25px " href="#">PERIKSA</a>
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
    <!-- <div class="row">
        <div class="col-md-1">
            <h3 class="pb-2 mb-2 " style="color: #AAC4FF; text-align: center">
                Artikel
            </h3>
        </div>
    </div>
    <br> -->
    <!-- artikel -->

    <!-- End artikel -->

    <!-- Footer -->
    <footer id="footer" class="footer">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
              <a href="" class="logo d-flex align-items-center" style="text-decoration:none  ">
                <span >FRESH DENTAL
                    INDONESIA </span>
              </a>
              <p style="font-size: 25px">Jl. Kalidami No. 41 Surabaya</p>

            </div>

            <div class="col-lg-3 col-6 footer-links">
              <h4>Hubungi Kami</h4>
              <ul style="font-size: 20px; ">
                <li><a style="text-decoration: none"href="#">freshdental@gmail.com</a></li>
                <li><a style="text-decoration: none"href="#">@freshdent</a></li>
                <li><a style="text-decoration: none"href="#">021-555-786-234</a></li>
              </ul>
            </div>

            <div class="col-lg-4 col-6 footer-links">
              <h4>Download Aplikasi</h4>
              <ul>
                <a href=""></a>
              </ul>
            </div>
          </div>
        </div>

        <div class="container mt-4">
          <div class="copyright">
            &copy; Copyright <strong><span>BantuMereka</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
            Designed by arek"
          </div>
        </div>

      </footer><!-- End Footer -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script>
    $('#carouselExampleIndicators').on('slid.bs.carousel', function (e) {
    $('#carouselExampleIndicators').carousel('2') // Will slide to the slide 2 as soon as the transition to slide 1 is finished
  })
  $('#carouselExampleIndicators').carousel('1') // Will start sliding to the slide 1 and returns to the caller
  $('#carouselExampleIndicators').carousel('2') // !! Will be ignored, as the transition to the slide 1 is not finished !!</script>

{{-- <script> window.onload = function(){
    var pageTitle = Andara Dental.title;
    var attentionMessage = 'Mari Kembali';
    var blinkEvent = null;
    Andara Dental.addEventListener('visibilitychange',function(e)
    { var isPageActive = !Andara Dental.hidden;
        if (!isPageActive) {
            blink();
        }else
        Andara Dental.title=pageTitle;
        clearInterval(blinkEvent);
    }
});
function blink(){
    blinkEvent= setInterval(function(){
        if (Andara Dental.title === attentionMessage) {
            Andara Dental.title = pageTitle;
        } else {
            Andara Dental.title = attentionMessage;
        }
    }, 100);
}; </script> --}}
</body>
</html>
