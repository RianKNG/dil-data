<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
  height: 5%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: rgb(221, 221, 221);}

#customers th {
  padding-top: 12px;
  padding-bottom: 6px;
  text-align: left;
  background-color: #140463;
  color: white;
}
</style>
</head>
<body>

  {{-- 
  <center><img src="{{ ('admin/assets/img/logo-dark4.jpg') }}"width="30" height="20"alt=""> --}}
      <h1><center>Status Aktip</center></h1>
      <?php
  
  setlocale(LC_TIME, 'id_ID.utf8');
  
  $hariIni = new DateTime();
  
  echo strftime('%a %d %b %Y, %H:%M', $hariIni->getTimestamp());
  ?>
<table>
  <tr>
    <th>cabang</th>
    <th>Status</label></th>
    <th>Rekening</th>  
    {{-- <th>no_rekening</th> --}}
    <th>Nama Sekarang</th>
    <th>Nama Pemilik</th>
    <th>No Rumah</th>
    <th>RT</th>
    <th>RW</th>
    <th>Blok</th>
    <th>Dusun</th>
    <th>Kecamatan</th>
    <th>Status Milik</th>
    <th>JML Jiwa Tetap</th>
    <th>JML Jiwa Tidak Tetap</th>
    <th>Tanggal Pasang</th>
    <th>Merek</th>
    <th>Segel</th>
    <th>Stop Kran</th>
    <th>Cek Valve</th>
    <th>Kopling</th>
    <th>Plug</th>
    <th>box</th>
    <th>Tanggal Dil</th>
    {{-- <th>thn_billing</th> --}}
    <th>Sumber Lain</th>
    <th>Jenis Usaha</th>
    
    <th>timestamp</th>
  </tr>
  @php
      $no=1;
  @endphp
 @foreach ($data as $index => $k)
<tr >  
</td>
<td>{{ $k->cabang }}</td>
<td><label class=" btn {{ ($k->status == 1 ) ? 'btn-success btn-xs' : 'btn-danger btn-xs'}}">{{ ($k->status == 1 ) ? 'Aktip' : 'Non Aktip' }}</label></td>
<td>{{ $k->id }}</td>  
{{-- <td>{{ $k->no_rekening }}</td>
<td>{{ $k->nama_sekarang }}</td>
<td>{{ $k->nama_pemilik }}</td>
<td>{{ $k->no_rumah }}</td>
<td>{{ $k->rt }}</td>
<td>{{ $k->rw }}</td>
<td>{{ $k->blok }}</td>
<td>{{ $k->dusun }}</td>
<td>{{ $k->kecamatan}}</td>
<td>{{ $k->status_milik }}</td>
<td>{{ $k->jml_jiwa_tetap }}</td>
<td>{{ $k->jml_jiwa_tidak_tetap}}</td>
<td>{{ $k->tanggal_pasang }}</td>
<td> {{ $k->merek}}</td>
<td>{{ $k->segel }}</td>
<td>{{ $k->stop_kran }}</td>
<td>{{ $k->ceck_valve }}</td>
<td>{{ $k->kopling}}</td>
<td>{{ $k->plugran }}</td>
<td>{{ $k->box }}</td>
<td>{{ $k->bln_billing }}</td>
<td>{{ $k->thn_billing }}</td>
<td>{{ $k->sumber_lain}}</td>
<td>{{ $k->jenis_usaha }}</td> --}}

{{-- <td>{{ $k->timestamp}}</td> --}}

</tr>  
    
@endforeach

</table>

</body>
</html>
