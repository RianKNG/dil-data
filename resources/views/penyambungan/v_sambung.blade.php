
@extends('layouts.v_template')
@section('title','Penutupan Dil')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-primary" role="alert">
  {{ $message }}
</div>
@endif
 <!-- Main content -->
 <section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-8">
        
        <!-- general form elements -->
        <div class="card card-primary ">
          <div class="card-header">
            <h3 class="card-title">Tabel Penyambungan</h3>
          </div>
          {{-- <div class="card-body table-responsive p-0" style="height: 400px;"> --}}
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th width="5%">No.</th>
                  <th>Id Sambung</th>
                  <th>Id Tutup</th>
                  <th>spk</th>
                  <th>tanggal_tutup</th>
                  <th>alasan</th>
                  <th width="25%">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $index => $k)
                <tr>
                    <td>#</td>
                    <td>{{ $k->id }}</td>
                    {{-- <td>{{ $k->penutupan_id }}</td> --}}
                    <td>{{ $k->nama }}</td>
                    <td>{{ $k->id_dil }}</td>
                    <td>{{ $k->alasan }}</td>
                    <td>
                      {{-- <a href="penutupan/hapus/{{ $k->id }}" class="btn btn-primary btn-xs">Delete</a> --}}
                      
                      <a href="#" class="btn btn-success btn-xs">Edit</a>
                      <a href="#" 
                        class="btn btn-danger btn-xs" 
                        data-toggle="modal" 
                        data-target="##">
                        Delete
                      </a>
                  </td>
                </tr> 
             @endforeach
            </tbody>
            </table>
            {{-- modal --}}
            @foreach ($data as $index => $k)
            <div class="modal fade" id="#">
              <div class="modal-dialog">
                <div class="modal-content bg-danger">
                  <div class="modal-header">
                    <h4 class="modal-title">ddd</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Apakah anda yakin ingin hapus data ini?&hellip;ddd</p>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
                    <a href=#" class="btn btn-outline-light">Hapus</a>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            @endforeach
          {{-- <form>
            <div class="card-body">
              <div class="form-group">

              </div>
            </div>
          </form> --}}
        </div>
      </div>
      <!--/.col (left) -->
      <!-- right column -->
      {{-- <div class="col-md-4">
        <!-- Form Element sizes -->
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">Form Penutupan</h3>
          </div>
          <div class="card-body">
            <form action="#" method="post" enctype="multipart/form-data">
              @csrf
                <!-- /.card-header -->
                  <div class="form-group">
                      <label for="id_dil" class="col-sm-8 col-form-label">id_dil</label>
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
                    <div class="form-group row">
                      <label for="alasan" class="col-sm-8 col-form-label">alasan</label>
                      <div class="col-sm-4">
                        <input
                        type="text" 
                        name="alasan" 
                        class="form-control">
                      </div>
                    </div> 
                   
                    <div class="form-group">
                      <button class="btn btn-primary">simpan</button>
                     </div> 
                  </div>
            <form> --}}
              
              
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection