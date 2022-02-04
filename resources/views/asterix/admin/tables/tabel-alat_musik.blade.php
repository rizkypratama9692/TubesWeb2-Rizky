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