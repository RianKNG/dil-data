@extends('templates.v_template')
@section('title','Tambah Data')
@section('content')
<section class="content btn-xs">
<div class="container-fluid">
  <form action="/dil/update/{{ $data->id }}" method="post" enctype="multipart/form-data">
    @csrf

  <!-- SELECT2 EXAMPLE -->

    </div>
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Form Edit Data Dil</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>No Sambungan</label>
                        <input type="integer" class="form-control" name="id" value="{{ $data->id }}">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>cabang</label>
                          <input type="text" class="form-control" name="cabang" value="{{ $data->cabang }}">
                          @error('cabang')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                      </div>
                  </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>status</label>
                        <option  class="form-control" name="status"  value="{{ $data->no_rekening }}" disabled>Aktip</option>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>No Rekening</label>
                        <input type="integer" name="no_rekening" class="form-control" value="{{ $data->no_rekening }}" >
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Nama Sekarang</label>
                        <input type="text" class="form-control" name="nama_sekarang"value="{{ $data->nama_sekarang }}">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Nama Pemilik</label>
                        <input type="text" class="form-control" name="nama_pemilik" value="{{ $data->nama_pemilik }}">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>No Rumah</label>
                        <input type="text" class="form-control" name="no_rumah" value="{{ $data->no_rumah }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>RT</label>
                        <input type="integer" class="form-control" name="rt" value="{{ $data->rt }}">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>RW</label>
                        <input type="integer" class="form-control" name="rw" value="{{ $data->rw }}">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Blok</label>
                        <input type="text" class="form-control" name="blok" value="{{ $data->blok }}">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Dusun</label>
                        <input type="text" class="form-control" name="dusun" value="{{ $data->dusun }}">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Kecamatan</label>
                        <input type="text" class="form-control" name="kecamatan" value="{{ $data->kecamatan }}">
                      </div>
                    </div>
                  </div>
              
                  <div class="row">
                    <div class="col-md-4">
                      <div>tatus Milik</div>
                      <div class="form-group">
                        <div class="form-check">
                          <label class="form-check-label"><input class="form-check-input" type="checkbox" name="status_milik" id="status_milik" value="sewa" {{  ($data->status_milik == 'sewa' ? ' checked' : '') }}>Sewa</label>
                          <div></div>
                         <label class="form-check-label"><input class="form-check-input" type="checkbox" name="status_milik" id="status_milik" value="hak milik" {{  ($data->status_milik == 'Hak Milik' ? ' checked' : '') }}>Hak Milik</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Jml Jiwa Tetap</label>
                        <input type="integer" class="form-control" name="jml_jiwa_tetap" value="{{ $data->jml_jiwa_tetap }}">
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Jml Jiwa Tidak teteap</label>
                        <input type="integer" class="form-control" name="jml_jiwa_tidak_tetap" value="{{ $data->jml_jiwa_tidak_tetap }}">
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12">
                      <!-- checkbox -->
                      <div class="form-group">
                        <div class="form-input">
                         <label>Tanggal Pasang</label>
                          <input type="date" class="form-control" name="tanggal_pasang" value="{{ $data->tanggal_pasang }}">
                        </div>
                      </div>
                    </div>
                </div>
             
          
                <div class="row">
                  <div class="col-md-2">
                    <div>segel</div>
                    <div class="form-group">
                      <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" type="checkbox" name="segel" id="segel" value="ada" {{  ($data->segel == 'ada' ? ' checked' : '') }}>ada</label>
                        <div></div>
                       <label class="form-check-label"><input class="form-check-input" type="checkbox" name="segel" id="segel" value="tidak ada" {{  ($data->segel == 'tidak ada' ? ' checked' : '') }}>tidak ada</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div>stop kran</div>
                    <div class="form-group">
                      <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" type="checkbox" name="stop_kran" id="stop_kran" value="ada" {{  ($data->stop_kran == 'ada' ? ' checked' : '') }}>ada</label>
                        <div></div>
                       <label class="form-check-label"><input class="form-check-input" type="checkbox" name="stop_kran" id="stop_kran" value="tidak ada" {{  ($data->stop_kran == 'tidak ada' ? ' checked' : '') }}>tidak ada</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div>ceck valve</div>
                    <div class="form-group">
                      <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" type="checkbox" name="ceck_valve" id="ceck_valve" value="ada" {{  ($data->ceck_valve == 'ada' ? ' checked' : '') }}>ada</label>
                        <div></div>
                       <label class="form-check-label"><input class="form-check-input" type="checkbox" name="ceck_valve" id="ceck_valve" value="tidak ada" {{  ($data->ceck_valve == 'tidak ada' ? ' checked' : '') }}>tidak ada</label>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-2">
                    <div>kopling</div>
                    <div class="form-group">
                      <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" type="checkbox" name="kopling" id="kopling" value="ada" {{  ($data->kopling == 'ada' ? ' checked' : '') }}>ada</label>
                        <div></div>
                       <label class="form-check-label"><input class="form-check-input" type="checkbox" name="kopling" id="kopling" value="tidak ada" {{  ($data->kopling == 'tidak ada' ? ' checked' : '') }}>tidak ada</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div>plug</div>
                    <div class="form-group">
                      <div class="form-check">
                        <label class="form-check-label"> <input class="form-check-input" name="plugran" value="ada" type="checkbox" {{  ($data->box == 'ada' ? ' checked' : '') }}>ada</label>
                        <div></div>
                        <label class="form-check-label"> <input class="form-check-input" name="plugran" value="tidak ada" type="checkbox" {{  ($data->box == 'tidak ada' ? ' checked' : '') }}>tidak ada</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div>box</div>
                    <div class="form-group">
                      <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" type="checkbox" name="box" id="box" value="ada" {{  ($data->box == 'ada' ? ' checked' : '') }}>ada</label>
                         <div></div>
                        <label class="form-check-label"><input class="form-check-input" type="checkbox" name="box" id="box" value="tidak ada" {{  ($data->box == 'tidak ada' ? ' checked' : '') }}>tidak ada</label>
                      </div>
                    </div>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Sumber Lain</label>
                        <input type="text" name="sumber_lain" class="form-control" value="{{ $data->sumber_lain}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Jenis Usaha</label>
                        <input type="text" name="jenisusaha" class="form-control" value="{{ $data->jenisusaha }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- Select multiple-->
                      <div class="form-group">
                        <label>Merek Warter Meter</label>
                        <select class="form-control" name="id_merek">
                          <option value="id_merek" {{($data->type === 1) ? 'selected' : ''}}> Linflow </option>
                          <option value="id_merek" {{($data->type === 2) ? 'selected' : ''}}> Barindo </option>
                          {{-- <option value="{{$data->id_merek}}"{{ $data->id_merek == 1 ? 'selected' : '' }}> {{ $data->merek }}1</option>
                          <option value="{{$data->id_merek}}"{{ $data->id_merek == 2 ? 'selected' : '' }}> {{ $data->merek }}2</option> --}}
                          
                         
                        </select>
                      </div>
                    </div>
                  </div>
              
              <div class="form-group">
                <button class="btn btn-primary">simpan</button>
               </div> 
            </div>
          </div>
          <form>
@endsection
