@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{asset('css/ceeses.css')}}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="container my-5">
    <div class="card">
        <form action="{{url('tambah')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="md-form mb-3">
                    <label class="f14" data-error="wrong" data-success="right" for="-">Jenis item : </label>
                    <div class="form-group">
                        <select class="form-select" id="jenis_item" name="jenis_item" aria-label="Default select example">
                            <option value="" selected>Silahkan pilih</option>
                            <option value="Ruang Studio" >Ruang Studio</option>
                            <option value="Alat Musik" >Alat Musik</option>
                            <option value="Alat Studio" >Alat Studio</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
            <!-- <textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Message"></textarea> -->
                
            </div>
                <div class="md-form mb-3">
                    <label class="f14" data-error="wrong" data-success="right" for="-">Nama item : </label>
                    <input type="text" id="nama_item" name="nama_item" class="form-control validate" name="-">
                </div>
                <div class="md-form mb-3">
                    <label class="f14" data-error="wrong" data-success="right" for="-">Gambar item : </label>
                    <input type="file" id="gambar_item" name="gambar_item" class="form-control validate" name="-">
                </div>
                <div class="md-form mb-3">
                    <label class="f14" data-error="wrong" data-success="right" for="-">Status item : </label>
                    <div class="form-group">
                        <select class="form-select" id="status_item" name="status_item" aria-label="Default select example">
                            <option value="" selected>Silahkan pilih</option>
                            <option value="0" >Tersedia</option>
                            <option value="1" >Dipinjam</option>
                        </select>
                    </div>
                </div>
                <div class="md-form mb-3">
                    <label class="f14" data-error="wrong" data-success="right" for="-">Harga item : </label>
                    <input type="number" id="harga_item" name="harga_item" class="form-control validate" name="-">
                </div>
                <div class="md-form mb-3">
                    <label class="f14" data-error="wrong" data-success="right" for="-">Deskripsi item : </label>
                    <textarea id="deskripsi_item" name="deskripsi_item" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-outline-dark submit px-3">Tambah</button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection