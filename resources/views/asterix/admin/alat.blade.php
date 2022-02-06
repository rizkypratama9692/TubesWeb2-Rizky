
@extends('layouts.app')
<?php $no=1 ?>
@section('content')

<!-- ini link rel google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,400;0,500;0,600;0,700;1,500;1,600&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('css/ceeses.css')}}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



<div class="my-5 container" id="tabel">
<ul class="nav nav-tabs mb-4 justify-content-center" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="ruang_studio-tab" data-bs-toggle="tab" data-bs-target="#ruang_studio" type="button" role="tab" aria-controls="ruang_studio" aria-selected="true">Ruang Studio</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="alat_studio-tab" data-bs-toggle="tab" data-bs-target="#alat_studio" type="button" role="tab" aria-controls="alat_studio" aria-selected="false">Alat Studio</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="alat_musik-tab" data-bs-toggle="tab" data-bs-target="#alat_musik" type="button" role="tab" aria-controls="alat_musik" aria-selected="false">Alat Musik</button>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" href="/asterix/admin/alat/tambah">Tambah item</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="ruang_studio" role="tabpanel" aria-labelledby="ruang_studio-tab">
    @include('asterix.admin.tables.tabel-ruang_studio')
  </div>
  <div class="tab-pane fade" id="alat_studio" role="tabpanel" aria-labelledby="alat_studio-tab">
  @include('asterix.admin.tables.tabel-alat_studio')
  </div>
  <div class="tab-pane fade" id="alat_musik" role="tabpanel" aria-labelledby="alat_musik-tab">
  @include('asterix.admin.tables.tabel-alat_musik')
  </div>
</div>
</div>




@endsection