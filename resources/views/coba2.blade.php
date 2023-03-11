<table>
    <thead>
        <tr>
            <td>id</td>
            <td>id_tutup</td>
            <td>id_ganti</td>
            <td>id_bbn</td>
            <td>id_dil</td>
        </tr>
    </thead>
    
    <tbody>
        @foreach ($data as $index => $k)
        <tr>
            {{-- <td>{{ $loop->iteration }}</td> --}}
            {{-- <td>{{ $k->id }}</td>
            <td>{{ $k->id_tutup }}</td>
            <td>{{ $k->id_ganti }}</td>
            <td>{{ $k->id_bbn }}</td>
            <td>{{ $k->nama_sekarang }}</td> --}}
            <td>{{ $k->tanggal_sambung }}</td>
            <td>{{ $k->tanggal_sambung }}</td>
            <td>{{ $k->tanggal_bbn }}</td>

        </tr> 
     @endforeach
    </tbody>
    
    
</table>