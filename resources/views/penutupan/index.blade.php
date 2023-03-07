
@extends('templates.v_template')
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
        <table class="table table-head-fixed text-nowrap btn-xs">
          <thead>
            <tr>
              <th width="5%">No.</th>
              <th>No Sambungan</th>
              <th>tanggal_tutup</th>
              <th>nama_sekarang</th>
              <th>alasan</th>
              <th>Status</th>
             
              <th width="20%">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $index => $k)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $k->id_dil }}</td>
                <td>{{ $k->tanggal_tutup }}</td>
                <td>{{ $k->nama_sekarang }}</td>
                <td>{{ $k->alasan }}</td>
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
          <div class="card-header btn-xs">
            <h6 class="card-title"><span class="btn btn-small">Form Penutupan</span></h6>
            
          </div>
          <div class="card-body">
            <form action="/penutupan/insert" method="post" enctype="multipart/form-data">
              @csrf
                <!-- /.card-header -->
                  <div class="form-group">
                      <h1 for="id_dil" class="col-sm-8 col-form-label">masukkan No Sambungan</h1>
                      <div class="col-sm-12">
                        <input 
                        type="integer" 
                        name="id_dil" 
                        class="form-control">
                      </div>
                    </div> 
                    <div>
                    {{-- </div> --}}
                    <div class="form-group row">
                      <h1 for="tanggal_tutup" class="col-sm-8 col-form-label">tanggal_ditutup</h1>
                      <div class="col-sm-4">
                        <input
                        type="date" 
                        name="tanggal_tutup" 
                        class="form-control">
                      </div>
                    </div> 
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>cabang</label>
                        <select name="alasan" class="form-control btn-xs">
                          <option selected>Alasan</option>
                          <option value="1">Butuh</option>
                          <option value="2">Sudah Ada Uang</option>
                        </select>
                          @error('alasan')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                      </div>
                   
                    <div class="form-group">
                      <button class="btn btn-primary btn btn-sm">simpan</button>
                     </div> 
                  </div>
            <form>
  </div>
</div>
<!-- /.row -->
</section>
@endsection