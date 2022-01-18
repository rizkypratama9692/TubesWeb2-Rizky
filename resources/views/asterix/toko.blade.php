@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<!-- ini link rel google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,400;0,500;0,600;0,700;1,500;1,600&display=swap" rel="stylesheet">
<!-- ini link rel google font END -->
<style type="text/css">
	/*ini buat apply font dari google font*/

/*css buat disable horizontal scroll soalnya ada glitch gj. Sumber : https://stackoverflow.com/questions/17756649/disable-the-horizontal-scroll*/
html, body {
    max-width: 100%;
    overflow-x: hidden;
}

/*ini css carousel dari BootstrapCreative. Sumber : https://bootstrapcreative.com/pattern/full-width-carousel-responsive-images/*/
.container, .container-lg, .container-md, .container-sm, .container-xl {
    max-width: 100%;
    padding-right: 0px;
    padding-left: 0px;
}
/*
Removes white gap between slides - chagnge to base color of slide images
*/
.carousel {
    background:#fff;
    padding: 0px;
}

/*
Forces image to be 100% width and not max width of 100%
*/
.carousel-item .img-fluid {
    width:100%;
}

/* 
anchors are inline so you need ot make them block to go full width
*/
.carousel-item a {
    display: block;
    width:100%;
}

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

a {
    text-decoration: none!important;
}

/*custom css text box*/
.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    /* background-color: #fff; */
    /* background-clip: padding-box; */
    outline: none;
    border: none;
    border-bottom: 1px solid #ced4da!important;
    border-radius: 0px!important;
    /* transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out; */
}

.inp {
    border:none;
    border-bottom: 1px solid #1890ff;
    padding: 5px 10px;
    outline: none;
 }

.form-elegant .font-small {
    font-size: 0.8rem; }

/*.form-elegant .z-depth-1a {
    -webkit-box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25);
    box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25); 
}*/

.form-elegant .z-depth-1-half,
/*.form-elegant .btn:hover {
    -webkit-box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15);
    box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15); }
*/
.form-elegant .modal-header {
    border-bottom: none; }

.modal-dialog .form-elegant .btn .fab {
    color: #2196f3!important; }

.form-elegant .modal-body, .form-elegant .modal-footer {
    font-weight: 400; 
}

/**/

.modal-content {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: unset!important;
    border: 0px solid rgba(0,0,0,.2)!important; 
    border-radius: 0rem!important;
    outline: 0;
}
.modal-header {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: start;
    align-items: flex-start;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 1rem 1rem;
    padding-bottom: 0.75rem!important;
    border-bottom: 1px solid #dee2e6;
    border-top-left-radius: calc(0.3rem - 1px);
    border-top-right-radius: calc(0.3rem - 1px);
}

.modal-dialog {
    max-width: 450px;
    margin: 1.75rem auto;
}

.f14 {
    font-size: 14px!important;
}
</style>
<!-- css buat list produk dari : https://bootsnipp.com/snippets/R5r9A -->
<style type="text/css">
    .card-product .img-wrap {
        border-radius: 3px 3px 0 0;
        overflow: hidden;
        position: relative;
        height: 220px;
        text-align: center;
    }
    .card-product .img-wrap img {
        max-height: 100%;
        max-width: 100%;
        object-fit: cover;
    }
    .card-product .info-wrap {
        overflow: hidden;
        padding: 15px;
        border-top: 1px solid #eee;
    }
    .card-product .bottom-wrap {
        padding: 15px;
        border-top: 1px solid #eee;
    }

    .label-rating { margin-right:10px;
        color: #333;
        display: inline-block;
        vertical-align: middle;
    }

    .card-product .price-old {
        color: #999;
    }
</style>

<div class="row border-bottom">
<!--     <div style="flex: 0 0 19%!important; max-width: 19%!important;" class="p-0">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" >
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="https://getbootstrap.com/docs/5.1/examples/sidebars/#" class="nav-link active" aria-current="page">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                  Home
                </a>
              </li>
              <li>
                <a href="https://getbootstrap.com/docs/5.1/examples/sidebars/#" class="nav-link link-dark">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                  Dashboard
                </a>
              </li>
              <li>
                <a href="https://getbootstrap.com/docs/5.1/examples/sidebars/#" class="nav-link link-dark">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                  Orders
                </a>
              </li>
              <li>
                <a href="https://getbootstrap.com/docs/5.1/examples/sidebars/#" class="nav-link link-dark">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                  Products
                </a>
              </li>
              <li>
                <a href="https://getbootstrap.com/docs/5.1/examples/sidebars/#" class="nav-link link-dark">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                  Customers
                </a>
              </li>
            </ul>
            <hr>
            <div class="dropdown">
              <a href="https://getbootstrap.com/docs/5.1/examples/sidebars/#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="./Sidebars · Bootstrap v5.1_files/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>mdo</strong>
              </a>
              <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.1/examples/sidebars/#">New project...</a></li>
                <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.1/examples/sidebars/#">Settings</a></li>
                <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.1/examples/sidebars/#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.1/examples/sidebars/#">Sign out</a></li>
              </ul>
            </div>
          </div>
    </div> -->
    <div class="p-0 col">
        <section class="container justify-content-center justify-content-lg-between p-5">

            <div class="row justify-content-center">
                <div class="span2 mx-2">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="https://s9.postimg.org/tupxkvfj3/image.jpg"></div>
                        <figcaption class="info-wrap">
                                <h5 class="title">Another name of item</h5>
                                <h7 class="desc">Some small description goes here</h7>
                                <!-- <div class="rating-wrap">
                                    <div class="label-rating">132 reviews</div>
                                    <div class="label-rating">154 orders </div>
                                </div> -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Order Now</a> 
                            <div class="price-wrap h7">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div> 
                        </div> 
                    </figure>
                </div>
                <div class="span2 mx-2">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="https://s9.postimg.org/tupxkvfj3/image.jpg"></div>
                        <figcaption class="info-wrap">
                                <h5 class="title">Another name of item</h5>
                                <h7 class="desc">Some small description goes here</h7>
                                <!-- <div class="rating-wrap">
                                    <div class="label-rating">132 reviews</div>
                                    <div class="label-rating">154 orders </div>
                                </div> -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Order Now</a> 
                            <div class="price-wrap h7">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div> 
                        </div> 
                    </figure>
                </div>
                <div class="span2 mx-2">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="https://s9.postimg.org/tupxkvfj3/image.jpg"></div>
                        <figcaption class="info-wrap">
                                <h5 class="title">Another name of item</h5>
                                <h7 class="desc">Some small description goes here</h7>
                                <!-- <div class="rating-wrap">
                                    <div class="label-rating">132 reviews</div>
                                    <div class="label-rating">154 orders </div>
                                </div> -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Order Now</a> 
                            <div class="price-wrap h7">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div> 
                        </div> 
                    </figure>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- list product dari https://bootsnipp.com/snippets/R5r9A -->

@endsection