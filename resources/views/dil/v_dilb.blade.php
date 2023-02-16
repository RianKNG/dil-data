
@extends('layouts.v_template')
@section('title','Master Dil')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-primary" role="alert">
  {{ $message }}
</div>
@endif
<div class="row">
  <div class="col-12">
    <div class="card">
     <div class="card-header"> 
        {{-- <h3 class="card-title">Data : {{ $judul }}</h3> --}}
        <tr> <a href="/dil/add" class="btn btn-primary">Tambah(+)</a></tr>
       

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <form action="/dil" method="GET">
              <input type="search" class="form-control float-right" name="search" id="inputPassword" placeholder="Cari Pelanggan">
            </form>
            <div class="input-group-append">

            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 400px;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th width="5%">No</th>
              <th>Status Sekarang</th>
              <th>No Sambungan</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Merek</th>
              <th>Aktip/Non Aktipkan</th>
              {{-- <th>Status</th> --}}
              <th width="25%">Aksi</th>
            </tr>
          </thead>
          <tbody>
     
            @foreach ($data as $index => $k)
            <tr>
              <td>#</td>
              <td><label class=" btn {{ ($k->status == 'aktip' ) ? 'btn-success btn-xs' : 'btn-primary btn-xs'}}">{{ ($k->status == 'aktip' ) ? 'Aktip' : 'Non Aktip' }}</label></td>
                <td>{{ $k->no_sambungan }}</td>
                <td>{{ $k->nama }}</td>
                <td>{{ $k->alamat }}</td>
                <td>{{ $k->merek }}</td>
               
                <td>
                  @if ($k->status == aktip)
                      <a href="" class="btn btn-xs btn-danger">Non Aktip Kan.</a>
                  @else
                      <a href="" class="btn btn-xs btn-success">Aktip Kan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.</a>
                  @endif
                </td>
                <td>
                 
                  <a href="dil/edit/{{ $k->id }}" class="btn btn-warning btn-xs">Edit</a>
                  
                 
                  <a href="#" class="btn btn-success btn-xs">Detail</a>
                  <a href="dil/hapus/{{ $k->id }}" 
                    class="btn btn-danger btn-xs" 
                    data-toggle="modal" 
                    data-target="#delete{{ $k->id }}">
                    Delete
                  </a>
              </td>
            </tr>
                
         @endforeach
            
        </tbody>
        <tfoot>
          <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th>Engine version</th>
            <th>CSS grade</th>
          </tr>
          </tfoot>
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

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<!-- /.row -->
@endsection