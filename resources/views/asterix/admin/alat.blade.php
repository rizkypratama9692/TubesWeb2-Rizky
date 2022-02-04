
@extends('layouts.app')
<?php $no=1 ?>
@section('content')

<div class="my-5 container" id="tabel-alat">
    <ul class="nav nav-tabs mb-5 justify-content-center" id="" role="tablist">
    <li class="active nav-item" role="presentation">
        <button class="nav-link" id="ruang-studio-tab" data-bs-toggle="tab" data-bs-target="#ruang-studio" type="button" role="tab" aria-selected="true">Ruang Studio</button>
     </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="alat-studio-tab" data-bs-toggle="tab" data-bs-target="#alat-studio" type="button" role="tab" aria-selected="false">Alat Studio</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tabel_musik-tab" data-bs-toggle="tab" data-bs-target="#tabel_musik" type="button" role="tab" aria-selected="false">Alat Musik</button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" id="ruang-studio" role="tabpanel" aria-labelledby="ruang-studio-tab"> 
            
            

            
            
        <div class="tab-pane fade" id="alat-studio" role="tabpanel" aria-labelledby="alat-studio-tab"> 



        </div>
        <div class="tab-pane fade" id="tabel_musik" role="tabpanel" aria-labelledby="tabel_musik-tab">
            
        
            
        </div>
    </div>
    
</div>


@include('asterix.admin.tables.tabel-alat_musik')

@endsection