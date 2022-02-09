@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{asset('css/ceeses.css')}}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php $no=1 ?>
<div class="container my-5">
    <table class="table table-striped">
        <thead>
            <tr>
                <th> No </th>
                <th> Nama </th>
                <th> Email </th>
                <th> Role user </th>
                <th> Tanggal dibuat </th>
                <th> Aksi </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataUser as $item)
                <tr> 
                    <td> {{ $no++ }} </td>
                    <td> {{ $item->name }} </td>
                    <td> {{ $item->email }} </td>
                    <td> {{ $item->role }} </td>
                    <td> {{ $item->created_at }} </td>
                    <td><a href="{{url('/asterix/admin/alat/edit/'.$item->id)}}" class="btn btn-outline-dark">Edit</a><a href="" class="btn btn-outline-danger">Hapus</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection