
@extends('layouts.v_template')
@section('title','Master Dil')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
  {{ $message }},
</div>
@endif



<div class="container-fluid btn-xs">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
       
        <div class="card card-outline card-warning">
          <div class="mt-2"> ----- Data Induk Pelanggan Master ----- 
            
             <a href="/exportexcel">ExportExel</a>
                <div>
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#import">
                    IMPORT
                </button>
               
          </div>
          <div class="card-body">
        
           
              <div class="card-body table-responsive p-0" style="height: 500px;">
                <table id="table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Status Sekarang</th>
                    <th>No Sambungan</th>
                    <th>Rek</th>
                    <th>Nama Sekarang</th>
                    <th>Nama Pemilik</th>
                    {{-- <th>No Rumah</th>
                    <th>Rt</th>
                    <th>Rw</th>
                    <th>Blok</th>
                    <th>Dusun</th> --}}
                    {{-- <th>Kecamatan</th> 
                    <th>Status Milik</th>
                    <th>Jiwa Tetap</th> --}}
                    <th>Jiwa Tidak Tetap</th>
                    <th>Tanggal Pasang</th>
                    <th>Id Merek</th>
                    {{-- <th>Segel</th> --}}
                    
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
                    
                    <td><label class=" btn {{ ($k->status == 1 ) ? 'btn-success btn-xs' : 'btn-danger btn-xs'}}">{{ ($k->status == 1 ) ? 'Aktip' : 'Non Aktip' }}</label></td>
                    <td>{{ $k->id }}</td>  
                    <td>{{ $k->no_rekening }}</td>
                    <td>{{ $k->nama_sekarang }}</td>
                    <td>{{ $k->nama_pemilik }}</td>
                    {{-- <td>{{ $k->no_rumah }}</td>
                    <td>{{ $k->rt }}</td>
                    <td>{{ $k->rw }}</td>
                    <td>{{ $k->blok }}</td>
                    <td>{{ $k->dusun }}</td> --}}
                    {{-- <td>{{ $k->kecamatan}}</td>
                    <td>{{ $k->status_milik }}</td>
                    <td>{{ $k->jml_jiwa_tetap }}</td> --}}
                    <td>{{ $k->jml_jiwa_tidak_tetap}}</td>
                    <td>{{ $k->tanggal_pasang }}</td>
                    <td>{{ $k->id_merek }}</td>
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
                          <a href="/dil/status/{{ $k->id }}" class="btn btn-xs btn-success">Aktip Kan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.</a>
                        @endif
                      </td>
                      <td>
                        <a href="dil/edit/{{ $k->id }}" class="btn btn-warning btn-xs"><i class="fa fa-edit" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="btn btn-success btn-xs"><i class="fa fa-info-circle" aria-hidden="true"></i>
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
  </div>
</div>
</div>
<!-- modal -->
<div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
         
          <form action="/importexcel" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">
                  <div class="form-group">
                      <label>PILIH FILE</label>
                      <input type="file" name="file" class="form-control" required>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                  <button type="submit" class="btn btn-success">IMPORT</button>
              </div>
          </form>
      </div>
  </div>
</div>
@endsection
@section('script')
<script>
$(document).ready(function () {
  $('#table').DataTable({
    "responsive": true,"autoWidth": false,
      lengthMenu: [
          [15, 25, 50,100, -1],
          [15, 25, 50,100, 'All'],
      ],
  });
});
</script>
@endsection
