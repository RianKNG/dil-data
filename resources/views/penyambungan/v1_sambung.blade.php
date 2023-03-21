
@extends('templates.v_template')
@section('title','Penutupan Dil')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-primary" role="alert">
  {{ $message }}
</div>
@endif

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Penutupan</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 200px; ">
              {{-- <input type="search" name="search" class="form-control float-right" placeholder="search"> --}}
              <div class="input-group mt-2 float-right mr-auto">
                <form class="form" method="get" action="penyambungan/search">
                  <div class="form-group w-100 mb-3">
                      {{-- <label for="search" class="d-block mr-2">Pencarian</label> --}}
                      <input type="text" name="search" class="form-control w-100 d-inline" id="search" placeholder="Masukkan keyword">
                      {{-- <button type="submit" class="btn btn-primary mr-3">Cari</button> --}}
                  </div>
              </form>
            </div>
          </div>
        </div>
        
        
      </div>
        <form action="/penyambungan" method="GET">
          <div class="input-group col-md-12 mr-2">
              <input type="date" class="form-control mr-0" name="start_date">
              <input type="date" class="form-control mr-0" name="end_date" width="10px">
              <button class="btn btn-primary plus mr-2" type="submit"> <span data-feather="plus"></span>Cari</button>
              <a href="/penyambungan" class="btn btn-success plus mr-2"><i class="fas fa-sync-alt">Kembali</i></a>
             
              
          </div>
      </form>
     <div class="mt-0">
     <br>
     </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
          <table class="table table-head-fixed text-nowrap btn-xs">
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

                    <td><label class=" badge {{ ($k->status == 0 ) ? 'badge-success badge-xs' : 'badge-danger badge-xs'}}">{{ ($k->status == 0 ) ? 'Aktip' : 'Non Aktip' }}</label></td>
                    <td>
                      {{-- <a href="penutupan/hapus/{{ $k->id }}" class="btn btn-primary btn-xs">Delete</a> --}}
                      
                      <a href="#" class="btn btn-success btn-xs">Edit</a>
                      <a href="penyambungan/hapus/{{ $k->id }}" 
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

            {{-- modal --}}
            @foreach ($data as $index => $k)
            <div class="modal fade" class="#delete{{ $k->id }}">
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
                    <a href="/penyambungan/hapus/{{ $k->id }}" class="btn btn-outline-light">Hapus</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
        </div>
      </div>
    </div>
     <!-- right column -->
      <div class="col-md-4">
        <!-- Form Element sizes -->
        <div class="card card-warning">
          <div class="card-header btn-xs">
            <h6 class="card-title"><span class="btn btn-small">Form Penutupan</span></h6> 
          </div>
          <div class="card-body">
            <form action="penyambungan/insert" method="post" enctype="multipart/form-data">
              @csrf
                <!-- /.card-header -->
                  <div class="form-group">
                      {{-- <label for="id" class="col-sm-8 col-form-label">id_dil</label> --}}
                      <h6 for="id" class="col-sm-8 col-form-label">no sambungan</h6>
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
                        <label>alasan</label>
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
    </div>
  </div>
</section>
@endsection