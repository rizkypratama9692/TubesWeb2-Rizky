
@extends('layouts.app')
<?php $no=1 ?>
@section('content')

<div class="my-5 container" id="tabel-alat">
    <ul class="nav nav-tabs mb-5 justify-content-center" id="" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="ruang-studio-tab" data-bs-toggle="tab" data-bs-target="#ruang-studio" type="button" role="tab" aria-selected="true">Ruang Studio</button>
     </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="alat-studio-tab" data-bs-toggle="tab" data-bs-target="#alat-studio" type="button" role="tab" aria-selected="false">Alat Studio</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="alat-musik-tab" data-bs-toggle="tab" data-bs-target="#alat-musik" type="button" role="tab" aria-selected="false">Alat Musik</button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" id="ruang-studio" role="tabpanel" aria-labelledby="ruang-studio-tab"> 
            
            

            
            
        <div class="tab-pane fade" id="alat-studio" role="tabpanel" aria-labelledby="alat-studio-tab"> 



        </div>
        <div class="tab-pane fade" id="alat-musik" role="tabpanel" aria-labelledby="alat-musik-tab">
            
        
            
        </div>
    </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Jenis Item </th>
                        <th> Nama Item </th>
                        <th> Gambar Item </th>
                        <th> Status Item </th>
                        <th> Harga Item </th>
                        <th> Deskripsi Item </th>
                        <th colspan="2">  </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataRuangStudio as $item)
                        <tr> 
                            <td> {{ $no++ }} </td>
                            <td> {{ $item->jenis_item }} </td>
                            <td> {{ $item->nama_item }} </td>
                            <td> {{ $item->gambar_item }} </td>
                            <td> {{ $item->status_item== "0" ? "Tersedia" : "Dipinjam" }} </td>
                            <td> {{ $item->harga_item }} </td>
                            <td> {{ $item->deskripsi_item }} </td>
                            
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
</div>




@endsection