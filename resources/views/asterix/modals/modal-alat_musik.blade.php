<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal-form" data-bs-target="#modal-form">
  Launch demo modal
</button> -->
<style>
  /* .modal-dialog {
      max-width: 1000px!important;
      margin: 1.75rem auto;
  } */
  .img-product {
    height: inherit;
    object-fit: cover;
    max-width: 100%;
  }

  .img-product-wrap {
    height: 100%;
  }
</style>
<!-- Modal -->
@php
$i=1;
@endphp
@foreach($dataAlatMusik as $datas)
<!-- modal snip dari colorlib sumber : https://preview.colorlib.com/theme/bootstrap/modal-07/-->
<div class="modal fade" id="modal-alat_musik{{ $datas['id'] }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="row no-gutters">
        <div class="col-md-7 d-flex">
          <div class="modal-body p-5 img d-flex text-center d-flex align-items-center"><img id="gambar-item" class="img-product" src="{{ asset('img/'.$datas['gambar_item']) }}" />
          </div>
          </div>
          <div class="col d-flex">
          <div class="modal-body p-4 p-md-5 d-flex align-items-center color-1">
          <div class="text w-100 py-3">
          <!-- <span class="subheading">Booking an Appointment</span> -->
          <h3 class="mb-4 heading">{{ $datas['nama_item'] }}</h3>
          <form action="" class="contact-form">
          <div class="form-group mb-3">
          <input type="text" class="form-control" placeholder="Full Name">
          </div>
          <div class="form-group mb-3">
          <input type="text" class="form-control" placeholder="Email address">
          </div>
          <div class="form-group">
          <input type="text" class="form-control" placeholder="Subject">
          </div>
          <div class="form-group">
          <textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
          <button type="submit" class="form-control btn btn-outline-dark submit px-3">Send Message</button>
          </div>
          </form>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>
@endforeach