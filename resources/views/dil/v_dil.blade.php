
@extends('layouts.v_template')
@section('title','Master Dil')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-primary" role="alert">
  {{ $message }}
</div>
@endif
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Data DIL</h3>
  </div>
   {{-- <div class="row"> --}}
          <div class="col-12">
            {{-- <div class="card"> --}}
              {{-- <div class="card-header"> --}}
                {{-- <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div> --}}
              </div>
              </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="table" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th width="5%">No</th>
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
          <th width="20%">Aksi</th>
          
         
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
                <a href="/dil/status/{{ $k->id }}" class="btn btn-xs btn-danger">Non Aktip Kan.</a>
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
        <div class="modal-content bg-danger">
          <div class="modal-header">
            <h4 class="modal-title">{{ $k->nama }}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Apakah anda yakin ingin hapus data ini?&hellip;{{ $k->nama }}</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
            <a href="dil/hapus/{{ $k->id }}" class="btn btn-outline-light">Hapus</a>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    @endforeach
      {{-- <tr>
        <th>Rendering engine</th>
        <th>Browser</th>
        <th>Platform(s)</th>
        <th>Engine version</th>
        <th>CSS grade</th>
      </tr> --}}
      </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
</div>
@endsection
@section('script')
<script>
$(document).ready(function () {
  $('#table').DataTable({
    "responsive": true,"autoWidth": false,
      lengthMenu: [
          [2, 25, 50,100, -1],
          [2, 25, 50,100, 'All'],
      ],
  });
});
</script>
@endsection
