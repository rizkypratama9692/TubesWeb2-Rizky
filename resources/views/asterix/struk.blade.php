@extends('layouts.app')
@section('content')
<div class="md-form mb-3">
    <label class="f14" data-error="wrong" data-success="right" for="-">Nama item : </label>
    <input type="text" id="" class="form-control validate" name="-">
</div>
<div class="md-form mb-3">
    <label class="f14" data-error="wrong" data-success="right" for="-">Deskripsi item : </label>
    <input type="text" id="" class="form-control validate" name="-">
</div>
<div class="md-form mb-3">
    <label class="f14" data-error="wrong" data-success="right" for="-">Harga /jam : </label>
    <input type="number" id="" class="form-control validate" name="-">
</div>
<div class="md-form mb-3">
    <label class="f14" data-error="wrong" data-success="right" for="-">Jumlah jam : </label>
    <input type="number" id="" class="form-control validate" name="-">
</div>
<div class="md-form mb-3">
    <label class="f14" data-error="wrong" data-success="right" for="-">Total : </label>
    <input type="number" id="" class="form-control validate" name="-">
</div>
@endsection