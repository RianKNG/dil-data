<!DOCTYPE html>
<html>
<head>
<title>Datatables implementation in laravel - justlaravel.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script
	src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet"
	href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<style>
</style>
<body>
	<div class="container ">
		{{ csrf_field() }}
        <div class="table-responsive text-center">
			<table class="table table-borderless" id="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Status Sekarang</th>
                <th>Cabang</th>
                <th>No Sambungan</th>
                <th>Rek</th>
                <th>Nama Sekarang</th>
                <th>Nama Pemilik</th>
                <th>Nama Setelah BBN</th>
                {{-- <th>No Rumah</th>
                <th>Rt</th>
                <th>Rw</th>
                <th>Blok</th>
                <th>Dusun</th> --}}
                {{-- <th>Kecamatan</th>  --}}
                <th>Status Milik</th>
                {{-- <th>Jiwa Tetap</th> --}}
                <th>Jiwa Tidak Tetap</th>
                <th>Tanggal Pasang</th>
                <th>Tanggal File</th>
                <th>Id Merek</th>
                {{-- <th>####</th> --}}
                
                {{-- <th>Stop Kran</th> 
                <th>Ceck Valve</th>
                <th>Kopling</th>
                <th>Plug Kran</th>
                <th>Bulan Billing</th>
                <th>Tahun Billing</th>
                <th>Sumber Lain</th>
                <th>Jenis Usaha</th> --}}
                <th>Aktip/Non Aktipkan</th>
                <th width="15%">Aksi</th>
                
              
              </tr>
            </thead>
            
            <tbody>
              
              @foreach ($data as $index => $k)
              <tr>
                <td>{{ $loop->iteration }}</td>
                </td>
                <td><label class=" btn {{ ($k->status == 1 ) ? 'btn-success btn-xs' : 'btn-danger btn-xs'}}">{{ ($k->status == 1 ) ? 'Aktip' : 'Non Aktip' }}</label></td>
                <td>{{ duka($k->cabang) }}
                <td>{{ $k->id }}</td>  
                <td>{{ $k->no_rekening }}</td>
                <td>{{ $k->nama_sekarang }}</td>
                <td>{{ $k->nama_pemilik }}</td>
                <td>
                  @if(empty($k->nama_baru))
                      <p>__</p>
                  @else
                      <p>{{ $k->nama_baru }}</p>
                  @endif
                </td>
                {{-- <td>{{ $k->no_rumah }}</td>
                <td>{{ $k->rt }}</td>
                <td>{{ $k->rw }}</td>
                <td>{{ $k->blok }}</td>
                <td>{{ $k->dusun }}</td> --}}
                {{-- <td>{{ $k->kecamatan}}</td> --}}
                <td>{{ $k->status_milik }}</td>
                {{-- <td>{{ $k->jml_jiwa_tetap }}</td> --}}
                <td>{{ $k->jml_jiwa_tidak_tetap}}</td>
                <td>{{ $k->tanggal_pasang }}</td>
                <td>{{ $k->tanggal_file }}</td>
                <td> {{ $k->merek}}</td>
                {{-- <td>{{ $k->segel }}</td> --}}
                {{-- <td>{{ $k->stop_kran }}</td>
                <td>{{ $k->ceck_valve }}</td>
                <td>{{ $k->kopling}}</td>
                <td>{{ $k->plugran }}</td> --}}
                {{-- <td>{{ $k->box }}</td> --}}
                {{-- <td>{{ $k->bln_billing }}</td>
                <td>{{ $k->thn_billing }}</td>
                <td>{{ $k->sumber_lain}}</td>
                <td>{{ $k->jenis_usaha }}</td> --}}
                
                {{-- <td>{{ $k->timestamp}}</td> --}}
              
                
                  <td>
                    @if ($k->status == 1)
                      <a href="/dil/status/{{ $k->id }}" class="btn btn-xs btn-danger">Non Aktip.</a>
                    @else
                      <a href="/dil/status/{{ $k->id }}" class="btn btn-xs btn-success">Aktip Kan&nbsp;.</a>
                    @endif
                  </td>
                  <td>
                    <a href="dil/edit/{{ $k->id }}" class="btn btn-warning btn-xs"><i class="fa fa-edit" aria-hidden="true"></i>
                    </a>
                    <a href="dil/detail/{{ $k->id }}" class="btn btn-success btn-xs"><i class="fa fa-info-circle" aria-hidden="true"></i>
                    </a>
                    <a href="dil/hapus/{{ $k->id }}" 
                      class="btn btn-danger btn-xs" 
                      data-toggle="modal" 
                      data-target="#delete{{ $k->id }}">
                      <i class="fa fa-trash" aria-hidden="true"></i>

                    </a>
                </td>
              </tr>
                  
        
          @endforeach
          </tbody>
        
          </table>
          {{-- {{ $data->links() }}

<p>
Displaying {{$data->count()}} of {{ $data->total() }} product(s).
</p> --}}
{{-- *// ini adalah modal denger --}}
@foreach ($data as $index => $k)
<div class="modal fade" id="delete{{ $k->id }}">
  <div class="modal-dialog">
    <div class="modal-content bg-info">
      <div class="modal-header">
        <h4 class="modal-title">No Sambungan&hellip;{{ $k->id}}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin ingin hapus Data? {{ $k->nama_sekarang}}</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Batal</button>
        <a href="dil/hapus/{{ $k->id }}" class="btn btn-danger btn-sm">Hapus</a>
      </div>
    </div>
  </div>
</div>

@endforeach
</table>

	<script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
  </script>



</body>
</html>