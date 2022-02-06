@extends('layouts.app')
@section('content')
<!--  -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<!-- ini link rel google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,400;0,500;0,600;0,700;1,500;1,600&display=swap" rel="stylesheet">
<!-- ini link rel google font END -->
<!-- Custom css hasil experiment Start-->
<link rel="stylesheet" type="text/css" href="css/ceeses.css">
<!-- Custom css hasil experiment END-->



<!-- ini custom carousel dari BootstrapCreative. Sumber : https://bootstrapcreative.com/pattern/full-width-carousel-responsive-images/ -->
<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <a href="#">
                <!-- 
                If you need more browser support use https://scottjehl.github.io/picturefill/
                If a picture looks blurry on a retina device you can add a high resolution like this
                <source srcset="img/blog-post-1000x600-2.jpg, blog-post-1000x600-2@2x.jpg 2x" media="(min-width: 768px)">

                What image sizes should you use? This can help - https://codepen.io/JacobLett/pen/NjramL
                    -->
                    <picture >
                    <source srcset="img/1.jpg" media="(min-width: 1400px)">
                    <source srcset="img/1.jpg" media="(min-width: 769px)">
                    <source srcset="img/1.jpg" media="(min-width: 577px)">
                    <img style="width: 1400px; height: 500px; object-fit: cover;" srcset="img/1.jpg" alt="responsive image" class="d-block img-fluid">
                </picture>

                <div class="carousel-caption">
                    <div>
                        <h2>Ruangan Studio</h2>
                        <p>Mau sewa ruangan studio musik untuk recording, latihan manggung, dsb? Sewa disini!</p>
                        <!-- <span class="btn btn-sm btn-outline-secondary">Learn More</span> -->
                    </div>
                </div>
            </a>
        </div>
        <!-- /.carousel-item -->
        <div class="carousel-item">
            <a href="#">
                    <picture>
                    <source srcset="img/2.jpg" media="(min-width: 1400px)">
                    <source srcset="img/2.jpg" media="(min-width: 769px)">
                    <source srcset="img/2.jpg" media="(min-width: 577px)">
                    <img style="width: 1400px; height: 500px; object-fit: cover;" srcset="https://dummyimage.com/600x500/007aeb/4196e5" alt="responsive image" class="d-block img-fluid">
                </picture>

                <div class="carousel-caption justify-content-center align-items-center">
                    <div>
                        <h2>Alat Studio</h2>
                        <p>Mau sewa peralatan studio untuk home recording, mixing? Sewa disini!</p>
                        <!-- <span class="btn btn-sm btn-outline-secondary">Our Process</span> -->
                    </div>
                </div>
            </a>
        </div>
        <!-- /.carousel-item -->
        <div class="carousel-item">
            <a href="#">
                    <picture>
                    <source srcset="img/3.jpg" media="(min-width: 1400px)">
                    <source srcset="img/3.jpg" media="(min-width: 769px)">
                    <source srcset="img/3.jpg" media="(min-width: 577px)">
                    <img style="width: 1400px; height: 500px; object-fit: cover;" srcset="https://dummyimage.com/600x500/007aeb/4196e5" alt="responsive image" class="d-block img-fluid">
                </picture>

                <div class="carousel-caption justify-content-center align-items-center">
                    <div>
                        <h2>Alat Musik</h2>
                        <p>Mau sewa alat musik untuk manggung? Sewa disini!</p>
                        <!-- <span class="btn btn-sm btn-secondary">Learn How</span> -->
                    </div>
                </div>
            </a>
        </div>
        <!-- /.carousel-item -->
    </div>
    <!-- /.carousel-inner -->
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- /.carousel -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection