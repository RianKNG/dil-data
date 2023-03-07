
@extends('templates.v_template')
@section('title','Penutupan Dil')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-primary" role="alert">
  {{ $message }}
</div>
@endif
 <!-- Main content -->
 <div class="container-fluid">
 <div class="row">
  <div class="col-md-8">
    {{-- <div class="card"> --}}
      <div class="card-header">
            <h6 class="card-title"> <span>Tabel Penyambungan</span></h6>
          </div>
          <div class="card-body table-responsive p-0" style="height: 200px;">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th width="5%">No.</th>
                  <th>Id Dil</th>
                  <th>nama</th>
                  <th>alasan</th>
                  <th>tanggal_sambung</th>
                  <th>alasan</th>
                  <th width="25%">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $index => $k)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $k->id_dil }}</td>
                    <td>{{ $k->nama_sekarang }}</td>
                    <td>{{ $k->alasan }}</td>
                    <td>{{ $k->tanggal_sambung }}</td>
                    <td>{{ $k->dusun }}</td>
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
      <div class="col-md-4">
        <!-- Form Element sizes -->
        <div class="card card-warning">
          <div class="card-header">
            <h6 class="card-title"><span class="btn btn-small">Form Penyambungan</span></h6>
          </div>
          <div class="card-body">
            <form action="penyambungan/insert" method="post" enctype="multipart/form-data">
              @csrf
                <!-- /.card-header -->
                  <div class="form-group">
                      {{-- <label for="id" class="col-sm-8 col-form-label">id_dil</label> --}}
                      <h6 for="id" class="col-sm-8 col-form-label">Uniq Number</h6>
                      <div class="col-sm-12">
                        <input 
                        type="integer" 
                        name="id_dil" 
                        class="form-control">
                      </div>
                    </div> 
                    <div>
                    </div>
                    <div class="form-group">
                      <h6 for="tanggal_sambung" class="col-sm-8 col-form-label">tanggal_sambung</h6>
                      <div class="col-sm-12">
                        <input
                        type="date" 
                        name="tanggal_sambung" 
                        class="form-control">
                      </div>
                    </div> 
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>cabang</label>
                        <select name="alasan" class="form-control btn-xs">
                          <option selected>alasan ditutup</option>
                          <option value="1">Butuh</option>
                          <option value="2">Sudah Ada Uang</option>
                        </select>
                          @error('alasan')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                      </div>
                   
                    <div class="form-group">
                      <button class="btn btn-primary btn-small">simpan</button>
                     </div> 
                  </div>
            <form>
              
              
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection