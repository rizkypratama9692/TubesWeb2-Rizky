<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Index - Asterix</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <!-- ini link rel google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,400;0,500;0,600;0,700;1,500;1,600&display=swap" rel="stylesheet">
        <!-- ini link rel google font END -->
        <!-- Custom css hasil experiment Start-->
        <!-- cara vinny pake {{asset('css.csss')}} -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/ceeses.css')}}">
        <!-- Custom css hasil experiment END-->
    </head>
    <style>
        
    </style>

    <body>
        <!-- navbar Start -->
        <nav class="navbar navbar-expand-md navbar-light bg-white">
          <div class="container-fluid">
            <a href="/" class="navbar-brand logo">Asterix Studio &#9834;</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar6">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse justify-content-stretch" id="navbar6">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                      <a class="nav-link" href="/asterix">Beranda <span class="sr-only">Home</span></a>
                  </li>
                  <li class="nav-item"></li>
                      <a class="nav-link" href="/asterix/toko">Toko</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Tentang Kami</a>
                  </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <!-- <a style="margin-right:1rem;" class="btn btn-outline-dark" href="#">Login</a> -->
                        <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#modal-login">Login</button>
                        @include("layouts.modals.modal")
                    </li>
                </ul>
            </div>
          </div>
        </nav>
        <!-- navbar END -->
        @yield("content")

        <!-- ini custom footer dari MDBootstrap. Sumber : https://mdbootstrap.com/docs/standard/navigation/footer/ -->
        <footer class="text-lg-start bg-white text-muted">
          <!-- Section: Social media -->
          <section class="border-top border-bottom py-4 px-5">
            <div class="container-fluid">
              <div class="row justify-content-between">
                <div class="col">
                  <div class="me-5 d-none d-lg-block">
                    <span>Ayo terhubung dengan kami!</span>
                  </div>
                </div>
                <div class="col-auto">
                  <a href="https://www.facebook.com/pages/category/Local-Business/Studio-Musik-Asterik-700439320110883/" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a href="https://www.google.co.id/search?q=studio+asterix+margahayu&bih=760&biw=1598&hl=en&sxsrf=AOaemvJiEL_5b1Zxr811JG7Dcsgr4_5e8w%3A1640981857065&ei=YWXPYauqA4bYz7sPkdCS2Ag&oq=studio+asterix+marga&gs_lcp=Cgdnd3Mtd2l6EAMYADIGCAAQFhAeOgQIIxAnOgUIABCRAjoICAAQgAQQsQM6CAgAELEDEIMBOgUIABCABDoECAAQQzoLCAAQgAQQsQMQgwE6BwguENQCEEM6BAguEEM6BAgAEAM6CAgAEIAEEIsDOg4IABCABBCxAxCDARCLAzoICC4QgAQQiwM6BQgAEMsBOggIABCxAxCRAjoHCAAQsQMQQzoHCCMQ6gIQJzoOCC4QgAQQsQMQxwEQ0QM6BQguEIAEOgUIABCxAzoKCC4QxwEQowIQQzoNCC4QsQMQxwEQ0QMQQzoLCAAQgAQQsQMQiwM6CwguEMcBEK8BEMsBOggIABDLARCLAzoRCC4QgAQQxwEQrwEQ1AIQiwM6DgguEIAEEMcBEK8BEIsDOgsILhCABBDHARCvAToKCAAQgAQQhwIQFDoKCC4QxwEQ0QMQCjoECAAQCjoHCAAQChDLAToICAAQFhAKEB46AggmSgQIQRgASgQIRhgAUABY6iVgiSxoB3ACeACAAZcBiAGsE5IBBDIwLjeYAQCgAQGwAQq4AQLAAQE&sclient=gws-wiz" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                  </a>
                </div>
              </div>
            </div>
          </section>
          <!-- Section: Social media -->

          <!-- Section: Links  -->
          <section class="container-fluid">
            <div class="mt-5 mb-3 px-5">
              <!-- Grid row -->
              <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 mx-auto mb-4">
                  <!-- Content -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    <i class="fas fa-music me-3"></i> Asterix Music Studio
                  </h6>
                  <p>
                    Asterix Music Studio adalah studio musik yang menyediakan jasa sewa ruangan studio, alat-alat studio, dan alat musik dengan harga yang masuk akal. Hehe
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    Sewa
                  </h6>
                  <p>
                    <a href="#!" class="link text-reset">Ruangan Studio</a>
                  </p>
                  <p>
                    <a href="#!" class="link text-reset">Alat studio</a>
                  </p>
                  <p>
                    <a href="#!" class="link text-reset">Alat Musik</a>
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    Info
                  </h6>
                  <p>
                    <a href="#!" class="link text-reset">Biaya</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Tentang Kami</a>
                  </p>
                  <!-- <p>
                    <a href="#!" class="text-reset">Orders</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Help</a>
                  </p> -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mx-auto mb-md-0 mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    Contact
                  </h6>
                  <p><i class="fas fa-home me-3"></i> Jl. Neptunus Timur R2/1b, Sekejati, Kec. Buahbatu, Kota Bandung, <br> Jawa Barat 40286</p>
                  <p>
                    <i class="fas fa-envelope me-3"></i>
                    bingbong@asterixstudio.com
                  </p>
                  <p><i class="fas fa-phone me-3"></i> + 62 227 501 969</p>
                  <p><i class="fas fa-whatsapp me-3"></i> + 62 227 501 969</p>
                </div>
                <!-- Grid column -->
              </div>
              <!-- Grid row -->
            </div>
          </section>
          <!-- Section: Links  -->

          <!-- Copyright -->
          <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="link text-reset fw-bold" href="#">asterixstudio.com</a>
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </body>
    <!-- Kumpulan js Start -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- ini js buat load icon dari font awesome. Sumber : https://fontawesome.com/v5.15/how-to-use/on-the-web/setup/hosting-font-awesome-yourself -->
        <script defer src="/fontawesome/js/all.js"></script> <!--load all styles -->
        <!-- ini js scroll bar custom dari Nicola Spadari. Sumber : https://codepen.io/nicolaspadari/pen/eLMwzb -->
        <script type="text/javascript"> 
            //Init
            $(document).ready(function(){
              init();
            });

            function init(){
              //Auto margin calculator
              var navbarHeight = $("nav").height();
              var paddingTop = parseInt($("nav").css('padding-top'));
              var paddingBottom = parseInt($("nav").css('padding-bottom'));
              $('#main-content').css('margin-top', (navbarHeight + paddingTop + paddingBottom) + 'px');
                
              //Ripple
              var ripples = document.querySelectorAll('.ripple');
                for (var i = 0; i < ripples.length; i++) {
                    ripples[i].addEventListener('mousedown', rippleEffect, false);
                }

                function rippleEffect(e){
                    var width = this.clientWidth;
                    var height = this.clientHeight;
                    var rect = this.getBoundingClientRect();
                    var posX = e.clientX - rect.left;
                    var posY = e.clientY - rect.top;
                    var size = Math.max(width, height);
                    var effect = document.createElement('DIV');
                    effect.className = 'effect';
                    effect.style.width = size + 'px';
                    effect.style.height = size  + 'px';
                    effect.style.top = posY - size/2 + 'px';
                    effect.style.left = posX - size/2 + 'px';

                    this.appendChild(effect);
                    var parent = this;
                  
                    setTimeout(function() {
                        parent.removeChild(effect);
                    }, 750);
                }
              
              //Prevent horizontal scroll of page using keyboard
              $(window).keydown(function(e){
                if(e.which == 37 || e.which == 39){
                  e.preventDefault();
                }
              });
              
              //Scroll hide image
              $(window).scroll(function () {
                $(this).scrollTop() > 50 ? $('#scroll').fadeOut() : $('#scroll').fadeIn()
              });
            }
        </script>
    <!-- Kumpulan js END -->
</html>