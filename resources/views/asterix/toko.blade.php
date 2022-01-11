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

<!-- ini css product list dari :  -->
<style type="text/css">
	body {
    background-color: #fff;
    color: #000;
    overflow-x: hidden
}

.card {
    margin: auto;
    padding: 20px;
    border-radius: 15px;
    margin-top: 50px;
    margin-bottom: 50px
}

.like {
    color: #CFD8DC
}

.like-checked {
    color: #E53935
}

.like:hover {
    color: #E53935;
    cursor: pointer
}

.pic1 {
    width: 90%;
    height: 150px;
    margin-left: auto;
    margin-right: auto;
    display: block
}

.pic2 {
    width: 70%;
    height: 180px;
    margin-left: auto;
    margin-right: auto;
    display: block
}

.pic3 {
    width: 70%;
    height: 180px;
    margin-left: auto;
    margin-right: auto;
    display: block
}

.product-pic {
    padding-left: auto;
    padding-right: auto;
    width: 100%;
    height: 180px
}

.card-1 {
    padding: 0px 30px 0px 30px !important;
    border: none
}

.category {
    padding-top: 25px;
    color: grey
}

.product-name {
    padding-bottom: 15px
}

.price {
    font-size: 18px
}

.star-active {
    color: #FFCA28 !important
}

.fa-star {
    color: #CFD8DC;
    cursor: pointer
}
</style>
<!-- <aside style="padding-left:0px!important;" class="col-sm-3 flex-grow-sm-1 flex-shrink-1 flex-grow-0 sticky-top pb-sm-0 pb-3">
    <div class="bg-light border rounded-3 p-1 h-100 sticky-top">
        <ul class="nav nav-pills flex-sm-column flex-row mb-auto justify-content-between ">
            <li class="nav-item">
                <a href="#" class="nav-link px-2 ">
                    <i class="bi bi-house fs-5"></i>
                    <span class="d-none d-sm-inline">Studio</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link px-2">
                    <i class="bi bi-speedometer fs-5"></i>
                    <span class="d-none d-sm-inline">Alat Musik</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link px-2 "><i class="bi bi-card-text fs-5"></i>
                    <span class="d-none d-sm-inline">Alat Studio</span> </a>
            </li>
        </ul>
    </div>
</aside> -->

<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-9">
            <div class="card">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-1">
                            <!-- <div class="pr-3 row justify-content-end">
                                <div class="fa fa-heart like like-checked"></div>
                            </div> -->
                            <div class="product-pic"> <img class="pic1" src="https://i.imgur.com/EaNHGjT.png"> </div> <small class="category">//kategori</small>
                            <h5 class="product-name">//nama</h5>
                            <div class="row px-3 justify-content-between">
                                <p class="price">//harga</p>
                                <div class="stars"> 
                                	<!-- <span class="fa fa-star star-active"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>  -->
                                	<p class="price">//status pinjam</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-1">
                            <!-- <div class="pr-3 row justify-content-end">
                                <div class="fa fa-heart like"></div>
                            </div> -->
                            <div class="product-pic"> <img class="pic2" src="https://i.imgur.com/Yyi0L3k.jpg"> </div> <small class="category">//kategori</small>
                            <h5 class="product-name">//nama</h5>
                            <div class="row px-3 justify-content-between">
                                <p class="price">//int_harga</p>
                                <div class="stars"> 
                                	<!-- <span class="fa fa-star star-active"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star"></span>  -->
                                	<p class="price"> //Status pinjam</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-1">
                            <!-- <div class="pr-3 row justify-content-end">
                                <div class="fa fa-heart like"></div>
                            </div> -->
                            <div class="product-pic"> <img class="pic3" src="https://i.imgur.com/pZOAATT.jpg"> </div> <small class="category">//kategori</small>
                            <h5 class="product-name">//nama</h5>
                            <div class="row px-3 justify-content-between">
                                <p class="price">//harga</p>
                                <div class="stars"> 
                                	<p class="price">//status pinjam</p>
                                	<!-- <span class="fa fa-star star-active"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection