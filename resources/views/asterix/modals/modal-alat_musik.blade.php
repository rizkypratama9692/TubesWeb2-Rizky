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
          <form action="{{url('/asterix/struk')}}" method="GET" class="contact-form">
            <textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Message">{{ $datas['deskripsi_item'] }}</textarea>
            @if (Auth::check() == 1)
            <input type="hidden" name="id" value="{{ $datas['id'] }}">
            <input type="hidden" name="nama_item" value="{{ $datas['nama_item'] }}">
            <input type="hidden" name="deskripsi_item" value="{{ $datas['deskripsi_item'] }}">
            <input type="hidden" name="harga_item" value="{{ $datas['harga_item'] }}">
            
            <div class="form-group">
            <!-- <textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Message"></textarea> -->
              <select name="lama_pinjam" id="lama_pinjam" class="form-select" aria-label="Default select example">
              <option value="">Silahkan pilih</option>  
                <option value="2">2 Jam</option>
                <option value="4">4 Jam</option>
                <option value="6">6 Jam</option>
                <option value="8">8 Jam</option>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="form-control btn btn-outline-dark submit px-3">Pinjam</button>
            </div>
            @endif
          </form>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>
@endforeach