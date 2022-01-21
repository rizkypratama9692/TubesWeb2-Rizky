@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- ini link rel google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,400;0,500;0,600;0,700;1,500;1,600&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('css/ceeses.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/sidebars.css')}}">
<!-- ini link rel google font END -->

<div class="mt-4 container">
    <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="ruang-studio-tab" data-bs-toggle="tab" type="button" role="tab" aria-selected="true">Ruang Studio</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="alat-studio-tab" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Alat Studio</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="alat-musik-tab" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Alat Musik</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="ruang-studio" role="tabpanel" aria-labelledby="ruang-studio-tab"> 
            @include('asterix.list.list-ruang_studio')
        </div>
        <div class="tab-pane fade" id="alat-studio" role="tabpanel" aria-labelledby="alat-studio-tab"> 
            @include('asterix.list.list-alat_studio')
        </div>
        <div class="tab-pane fade" id="alat-musik" role="tabpanel" aria-labelledby="alat-musik-tab">
            @include('asterix.list.list-alat_musik')
        </div>
      </div>

    {{-- LIST DATA KOMPONEN --}}
</div>

<!-- list product dari https://bootsnipp.com/snippets/R5r9A -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection