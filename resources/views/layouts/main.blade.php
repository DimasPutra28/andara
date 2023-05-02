<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Andara Dental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    <!-- header -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="">
        <div class="container-fluid justify-content-between" style="background-color: #AAC4FF">
            <div class="row">
                <a class="navbar-brand" href="/" style="padding: 10px 0 10px 0">
                    <img src="img/logo.png" alt="" width="100" height="50" class="d-inline-block align-text-top ms-4">
                </a>
            </div>
            <div class="row" style="margin-right: 200px">
                <div class="dropdown" style="margin-right: -100px;" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" style="color: #ffffff; right: 50px;" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                      </svg>
                        <ul>
                            <li><a class="bi bi-person-plus-fill" style="padding-right: 113px; text-decoration: none; color: #163785" href="/register">Daftar</a></li>
                            <li><a class="bi bi-box-arrow-left" style="padding-right: 112px; text-decoration: none; color: #163785" href="/login">Masuk</a></li>
                        </ul>
                </div>


            </div>

        </div>
    </nav>
    <!-- End header -->

    @yield('dimas')

   <!-- Footer -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 footer-info text-align-center">
                    <a href="" class="logo d-flex align-items-center" style="text-decoration:none  ">
                        <span >FRESH DENTAL
                            INDONESIA </span>
                    </a>
                    <p style="font-size: 25px">Jl. Kalidami No. 41 Surabaya</p>
                </div>

                <div class="col-lg-4 col-12 footer-links text-align-center">
                    <h4>Hubungi Kami</h4>
                    <ul style="font-size: 20px; ">
                        <li><a style="text-decoration: none"href="#">freshdental@gmail.com</a></li>
                        <li><a style="text-decoration: none"href="#">@freshdent</a></li>
                        <li><a style="text-decoration: none"href="#">021-555-786-234</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-12 footer-links text-align-center">
                    <h4>Download Aplikasi</h4>
                    <a href="/">
                        <img src="img/gplay.png" style="margin-left: -20px" alt="">
                    </a >
                    <br>
                    <a href="/">
                        <img src="img/astore.png" style="margin-left: -5px" alt="">
                    </a>
                </div>
            </div>
        </div>
    </footer>
  <!-- End Footer -->
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
