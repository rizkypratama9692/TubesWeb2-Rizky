<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <!--Content-->
      <div class="modal-content form-elegant">
        <ul class="nav nav-tabs px-4" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="sales-tab" data-toggle="tab" href="#daftar" role="tab" aria-controls="daftar" aria-selected="false">Daftar</a>
          </li>
        </ul>
        <div class="modal-body">
        <!--Header-->
        <div class="tab-content py-0 px-0">
          <!-- tab login -->
          <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
            <div class="modal-header text-center">
              <h3 class="modal-title w-100 dark-grey-text font-weight-bold mt-3" id="myModalLabel"><strong>Login</strong></h3>
            </div>
            <p style="font-size: 12px; text-align: center!important;" class="text-muted">Silahkan login untuk menggunakan layanan kami!</p>
  
            <div class="modal-body mx-4">
              <form>
                <div class="md-form mb-3">
                    <label class="f14" data-error="wrong" data-success="right" for="email">Alamat Email : </label>
                    <input type="email" id="email" class="form-control validate">
                </div>

                <div class="md-form pb-3">
                    <label class="f14" data-error="wrong" data-success="right" for="Form-pass1">Password : </label>
                    <input type="password" id="Form-pass1" class="form-control validate">
                </div>

                <div class="text-center my-3">
                  <button type="submit" id="btn-login" class="btn btn-outline-dark btn-block btn-rounded z-depth-1a">Login</button>
                </div>
              </form>
            </div>
            <!--Footer-->
            <div style="justify-content: center!important;" class="modal-footer mx-5 pt-3 mb-1">
              <p class="font-small grey-text d-flex">Belum punya akun? <a role="tab" aria-controls="daftar" data-toggle="tab" href="#daftar" class="blue-text ml-1">Daftar disini</a></p>
            </div>
          </div>

          <!-- tab daftar -->
          <div class="tab-pane fade" id="daftar" role="tabpanel" aria-labelledby="daftar-tab">
            <div class="modal-header text-center">
              <h3 class="modal-title w-100 dark-grey-text font-weight-bold mt-3" id="myModalLabel"><strong>Daftar</strong></h3>
            </div>
            <p style="font-size: 12px; text-align: center!important;" class="text-muted">Silahkan daftar terlebih dahulu jika tidak memiliki akun!</p>
            @if(session("success"))
              <div class="alert alert-success">{{session("success")}}</div>
            @endif
  
            <div class="modal-body mx-4">
              <form method="post" action={{ url("daftar") }}>
                @csrf
                <div class="md-form mb-3">
                    <label class="f14" data-error="wrong" data-success="right" for="nama">Nama : </label>
                    <input type="text" id="nama" class="form-control validate" name="name">
                </div>
                <div class="md-form mb-3">
                    <label class="f14" data-error="wrong" data-success="right" for="email">Alamat Email : </label>
                    <input type="email" id="email" class="form-control validate" name="email">
                </div>

                <div class="md-form pb-3">
                    <label class="f14" data-error="wrong" data-success="right" for="Form-pass1">Password : </label>
                    <input type="password" id="Form-pass1" class="form-control validate" name="password">
                </div>

                <div class="text-center my-3">
                  <button type="submit" id="btn-daftar" class="btn btn-outline-dark btn-block btn-rounded z-depth-1a">Daftar</button>
                </div>
              </form>
            </div>
            <!--Footer-->
          </div>
        </div>
      </div>
    </div>
      <!--/.Content-->
</div>
