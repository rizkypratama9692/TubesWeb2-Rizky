<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Index - Asterix</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- ini link rel google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,400;0,500;0,600;0,700;1,500;1,600&display=swap" rel="stylesheet">
        <!-- ini link rel google font END -->
        <!-- ini js buat load icon dari font awesome. Sumber : https://fontawesome.com/v5.15/how-to-use/on-the-web/setup/hosting-font-awesome-yourself -->
        <script defer src="/fontawesome/js/all.js"></script> <!--load all styles -->
        <!-- ini font awesome END -->
    </head>
    <style>
        /*ini buat apply font dari google font*/
        * {
            font-size: 100%;
            font-family: 'Work Sans', sans-serif;
            font-weight: 500;
        }

        /*ini custom css navbar hasil experiment edit edit pake inspect element, belajar dari sensei falih naufal*/
        .logo{
            font-size: 150%;
            font-family: 'Work Sans', sans-serif; 
            font-style: italic;
            font-weight: 700;
        }
        .navbar {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: 1.25rem 1rem;
            box-shadow: 10px 10px 37px 0px rgba(0,0,0,0.26);
            -webkit-box-shadow: 10px 10px 37px 0px rgba(0,0,0,0.26);
            -moz-box-shadow: 10px 10px 37px 0px rgba(0,0,0,0.26);
        }
        .navbar-brand {
            display: inline-block;
            padding-top: 0.3125rem;
            padding-bottom: 0.3125rem;
            margin-right: 3rem;
            margin-left: 2rem;
            font-size: 1.25rem;
            line-height: inherit;
            white-space: nowrap;
        }
        .navbar-expand-md .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
            margin-right: 1.5rem;
        }
        .btn {
            border-radius: 2rem;
            padding: 0.5rem 0.9rem;
        }

        /*ini teh margin icon*/
        .me-4 {
            margin-right: 1.5rem!important;
        }

        /* ini css scroll bar custom dari Nicola Spadari. Sumber : https://codepen.io/nicolaspadari/pen/eLMwzb */
        ::-webkit-scrollbar {
            width: .45rem;
        }
        ::-webkit-scrollbar-thumb {
            background-color: rgba(27, 27, 27, .4);
            border-radius: 3px;
        }
        ::-webkit-scrollbar-track{
            background: transparent;
        }
        #scroll{
          opacity: .7;
        }
    </style>
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
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white">
        <a href="/" class="navbar-brand logo">Asterix Studio &#9834;</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar6">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-stretch" id="navbar6">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Beranda <span class="sr-only">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Toko</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a style="margin-right:1rem;" class="btn btn-outline-dark" href="#">Login</a>
                    <!-- <button style="margin-right:1rem;" type="button" class="btn btn-outline-dark">Daftar</button> -->
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        @yield("content")
    </div>
    <!-- ini custom footer dari MDBootstrap. Sumber : https://mdbootstrap.com/docs/standard/navigation/footer/ -->
    <footer class="text-lg-start bg-white text-muted">
      <!-- Section: Social media -->
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div style="margin-left: 1.25rem !important;" class="me-5 d-none d-lg-block">
          <span>Ayo terhubung dengan kami!</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
          <a href="https://www.facebook.com/pages/category/Local-Business/Studio-Musik-Asterik-700439320110883/" class="me-4 text-reset">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://www.google.co.id/search?q=studio+asterix+margahayu&bih=760&biw=1598&hl=en&sxsrf=AOaemvJiEL_5b1Zxr811JG7Dcsgr4_5e8w%3A1640981857065&ei=YWXPYauqA4bYz7sPkdCS2Ag&oq=studio+asterix+marga&gs_lcp=Cgdnd3Mtd2l6EAMYADIGCAAQFhAeOgQIIxAnOgUIABCRAjoICAAQgAQQsQM6CAgAELEDEIMBOgUIABCABDoECAAQQzoLCAAQgAQQsQMQgwE6BwguENQCEEM6BAguEEM6BAgAEAM6CAgAEIAEEIsDOg4IABCABBCxAxCDARCLAzoICC4QgAQQiwM6BQgAEMsBOggIABCxAxCRAjoHCAAQsQMQQzoHCCMQ6gIQJzoOCC4QgAQQsQMQxwEQ0QM6BQguEIAEOgUIABCxAzoKCC4QxwEQowIQQzoNCC4QsQMQxwEQ0QMQQzoLCAAQgAQQsQMQiwM6CwguEMcBEK8BEMsBOggIABDLARCLAzoRCC4QgAQQxwEQrwEQ1AIQiwM6DgguEIAEEMcBEK8BEIsDOgsILhCABBDHARCvAToKCAAQgAQQhwIQFDoKCC4QxwEQ0QMQCjoECAAQCjoHCAAQChDLAToICAAQFhAKEB46AggmSgQIQRgASgQIRhgAUABY6iVgiSxoB3ACeACAAZcBiAGsE5IBBDIwLjeYAQCgAQGwAQq4AQLAAQE&sclient=gws-wiz" class="me-4 text-reset">
            <i class="fab fa-google"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="">
        <div class="container text-md-start mt-5 mb-3">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div style="margin-left: 3rem !important;" class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
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
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Sewa
              </h6>
              <p>
                <a href="#!" class="text-reset">Ruangan Studio</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Alat-alat studio</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Alat Musik</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Info
              </h6>
              <p>
                <a href="#!" class="text-reset">Biaya</a>
              </p>
              <!-- <p>
                <a href="#!" class="text-reset">Booking</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Orders</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Help</a>
              </p> -->
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div style="margin-right: 3rem !important;" class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
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
        <a class="text-reset fw-bold" href="#">asterixstudio.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>
</html>