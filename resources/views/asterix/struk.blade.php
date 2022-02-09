@extends('layouts.app')
@section('content')
<div class="container my-5">
    <h3 style="justify-content: center;">Struk</h3>
    <form method="post" action="{{url('bayar')}}">
        @csrf
        <!-- csrf buat keamanan menghindari xss attack -->
        <input type="hidden" name="id_item" value="{{ $data['id'] }}">
        <div class="md-form mb-3">
            <label class="f14" data-error="wrong" data-success="right" for="-">Nama item : </label>
            <input disabled type="text" id="" class="form-control validate" name="nama_item" value="{{ $data['nama_item'] }}">
        </div>
        <div class="md-form mb-3">
            <label class="f14" data-error="wrong" data-success="right" for="-">Deskripsi item : </label>
            <input disabled type="text" id="" class="form-control validate" name="deskripsi_item" value="{{ $data['deskripsi_item'] }}">
        </div>
        <div class="md-form mb-3">
            <label class="f14" data-error="wrong" data-success="right" for="-">Harga /jam : </label>
            <input disabled type="number" id="" class="form-control validate" name="harga_item" value="{{ $data['harga_item'] }}">
        </div>
        <div class="md-form mb-3">
            <label class="f14" data-error="wrong" data-success="right" for="-">Jumlah jam : </label>
            <input disabled type="number" id="" class="form-control validate" name="lama_pinjam" value="{{ $data['lama_pinjam'] }}">
        </div>
        <div class="md-form mb-3">
            <label class="f14" data-error="wrong" data-success="right" for="-">Total : </label>
            <input disabled type="number" id="" class="form-control validate" name="total_bayar" value="{{$total}}">
        </div>
        <div class="form-group">
            <button type="submit" class="form-control btn btn-outline-dark submit px-3">Bayar</button>
        </div>
    </form>

</div>

@endsection