<div class="row">
@php
$i=1;
@endphp
@foreach($dataSemua as $datas)
    
        {{-- {{/*$i*/}} --}}
        {{-- {{/*$datas['jenis_item']*/}} --}}
        {{-- {{/*$datas['nama_item']*/}} --}}
        {{-- {{/*$datas['status_item']*/}} --}}
        {{-- {{/*$datas['harga_item']*/}} --}}
        {{-- {{/* $datas['deskripsi_item'] */}} --}}

    <div data-bs-toggle="modal" data-bs-target="#modal-semua{{ $datas['id'] }}" class="col-4 ">
        <figure class="card card-product">
            <div class="img-wrap"><img src={{ asset('img/'.$datas['gambar_item']) }}></div>
            <figcaption class="info-wrap">
                    <h5 class="title">{{$datas['nama_item']}}</h5>
                    <h6 class="desc">{{$datas['deskripsi_item']}}</h6>
                    <!-- <div class="rating-wrap">
                        <div class="label-rating">132 reviews</div>
                        <div class="label-rating">154 orders </div>
                    </div> -->
            </figcaption>
            <div class="bottom-wrap d-flex justify-content-between align-items-center">
                <!-- <a href="#" class="btn btn-sm btn-primary float-right">Order Now</a>  -->
                <h6 class="badge badge-dark">{{$datas['status_item']==0? 'Tersedia' : 'Dipinjam' }}</h6>
                <div class="price-wrap h7">
                    <span class="price-new">Rp. {{$datas['harga_item']}}</span> 
                    <!-- <del class="price-old">$1980</del> -->
                </div> 
            </div> 
        </figure>
    </div>
@endforeach
</div>

<!-- ini teh paginate, reference: -->
{{ $dataSemua->links() }}