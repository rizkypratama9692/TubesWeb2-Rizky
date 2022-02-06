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
            <th> Aksi </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataAlatMusik as $item)
            <tr> 
                <td> {{ $no++ }} </td>
                <td> {{ $item->jenis_item }} </td>
                <td> {{ $item->nama_item }} </td>
                <td> {{ $item->gambar_item }} </td>
                <td> {{ $item->status_item== "0" ? "Tersedia" : "Dipinjam" }} </td>
                <td> {{ $item->harga_item }} </td>
                <td> {{ $item->deskripsi_item }} </td>
                <td><a href="{{url('/asterix/admin/alat/edit/'.$item->id)}}" class="btn btn-outline-dark">Edit</a><a href="" class="btn btn-outline-danger">Hapus</a></td>
            </tr>
        @endforeach
    </tbody>
</table>