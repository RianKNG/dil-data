
@extends('layouts.v_template')
@section('title','Penutupan Dil')
@section('content')
<div class="container-fluid">
<div class="row">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Tabel Penutupan</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            {{-- <input type="search" name="search" class="form-control float-right" placeholder="search"> --}}
            <form action="/penutupan" method="GET">
              <input type="search" class="form-control" name="search" placeholder="Cari ">
            </form>
            {{-- <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div> --}}
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th width="5%">No.</th>
              <th>Id Penutupan</th>
              <th>tanggal_tutup</th>
              <th>alasan</th>
              <th>no sambungan</th>
              <th>nama_sekarang</th>
              <th>segel</th>
              <th width="20%">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $index => $k)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $k->id }}</td>
                <td>{{ $k->tanggal_tutup }}</td>
                <td>{{ $k->alasan }}</td>
                <td>{{ $k->id_dil }}</td>
                <td><label class=" btn {{ ($k->status == 1 ) ? 'btn-info btn-xs' : 'btn-info btn-xs'}}">{{ ($k->status == 1 ) ? 'Aktip' : 'Non Aktip' }}</label></td>
               
                <td>
                  {{-- <a href="penutupan/hapus/{{ $k->id }}" class="btn btn-primary btn-xs">Delete</a> --}}
                  
                  <a href="penutupan/edit/{{ $k->id }}" class="btn btn-success btn-xs">Edit</a>
                  <a href="penutupan/hapus/{{ $k->id }}" 
                    class="btn btn-danger btn-xs" 
                    data-toggle="modal" 
                    data-target="#delete{{ $k->id }}">
                    Delete
                  </a>
              </td>
              <td>{{ $k->nama_sekarang }}</td>
    
            </tr> 
         @endforeach
           
          </tbody>
        </table>
        
        @foreach ($data as $index => $k)
        <div class="modal fade" id="delete{{ $k->id }}">
          <div class="modal-dialog">
            <div class="modal-content bg-danger">
              <div class="modal-header">
                <h4 class="modal-title">{{ $k->nama_sekarang }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Apakah anda yakin ingin hapus data ini?&hellip;{{ $k->nama_sekarang }}</p>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
                <a href="penutupan/hapus/{{ $k->id }}" class="btn btn-outline-light">Hapus</a>
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
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
     <div class="col-md-4">
        <!-- Form Element sizes -->
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">Form Penutupan</h3>
          </div>
          <div class="card-body">
            <form action="/penutupan/insert" method="post" enctype="multipart/form-data">
              @csrf
                <!-- /.card-header -->
                  <div class="form-group">
                      <label for="id_dil" class="col-sm-8 col-form-label">masukkan No Sambungan</label>
                      <div class="col-sm-12">
                        <input 
                        type="integer" 
                        name="id_dil" 
                        class="form-control">
                      </div>
                    </div> 
                    <div>
                    </div>
                    <div class="form-group row">
                      <label for="tanggal_tutup" class="col-sm-8 col-form-label">tanggal_ditutup</label>
                      <div class="col-sm-4">
                        <input
                        type="date" 
                        name="tanggal_tutup" 
                        class="form-control">
                      </div>
                    </div> 
                    <div class="mb-3">
                      <label for="exampleInputEmail1">alasan</label>
                      <select class="custom-select" name="alasan">
                       <option selected>Pilih alasan</option>
                       <option value="nunggak">nunggak</option>
                       <option value="mengundurkan diri">mengundurkan diri</option>
                      
                     </select>
                    
                    </div>
                   
                    <div class="form-group">
                      <button class="btn btn-primary">simpan</button>
                     </div> 
                  </div>
            <form>
  </div>
</div>
<!-- /.row -->
</section>
@endsection