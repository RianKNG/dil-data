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
    <th>No Rekening</th>  
    <th>no_rekening</th>
    <th>nama_sekarang</th>
    <th>nama_pemilik</th>
    <th>no_rumah</th>
    <th>rt</th>
    <th>rw</th>
    <th>blok</th>
    <th>dusun</th>
    <th>kecamatan</th>
    <th>status_milik</th>
    <th>jml_jiwa_tetap</th>
    <th>jml_jiwa_tidak_tetap</th>
    <th>tanggal_pasang</th>
    <th> merek</th>
    <th>segel</th>
    <th>stop_kran</th>
    <th>ceck_valve</th>
    <th>kopling</th>
    <th>plugran</th>
    <th>box</th>
    <th>bln_billing</th>
    <th>thn_billing</th>
    <th>sumber_lain</th>
    <th>jenis_usaha</th>
    
    <th>timestamp</th>
  </tr>
  @php
      $no=1;
  @endphp
 @foreach ($s as $index => $k)
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
