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
<div class="modal fade" id="modal-form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="row justify-content-between">
          <div class="col-md-8">
            <div class="img-product-wrap">
              <img id="gambar-item" class="img-product" src="{{ asset('img/piano1.jpg') }}" />
            </div>
          </div>
          <div class="col">
            <div class="py-0 py-md-5 pr-4">
              <h3 class="mb-4" id="nama-item">#nama item</h3>
              <form action="{{url('')}}" class="signup-form">
                <div class="form-group mb-3">
                  <label class="label" for="name">Deskripsi item</label>
                  <!-- <input type="text" class="form-control" placeholder="John Doe"> -->
                  <textarea class="form-control" id="deskripsi-item">#isi deskripsi item</textarea>
                </div>
                <div class="form-group mb-3">
                  <label class="label" for="name">Berapa jam</label>
                  <input type="number" class="form-control" placeholder="" min="2" max="10">
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control btn btn-primary rounded submit px-3">Ajukan pinjaman</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>