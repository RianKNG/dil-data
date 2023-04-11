@extends('templates.v_template')
@section('title','Tambah Data')
@section('content')
<section class="content btn-xs">
<div class="container-fluid">
  <form action="/dil/insert/" method="post" enctype="multipart/form-data">
    @csrf
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
              <input type="integer" class="form-control" name="id" value="{{ old('id') }}">
              @error('id')
              <div class="alert text-danger">harus berisi 10 karakter</div>
              @enderror
            </div>
          </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>cabang</label>
                  <select name="cabang" class="form-control btn-xs">
                    <option selected>cab||unit</option>
                    <option value="9" @if (old('cabang') == "9") {{ 'selected' }} @endif>Tomo</option>
                    <option value="10" @if (old('cabang') == "10") {{ 'selected' }} @endif>Ujungjaya</option>
                    <option value="3" @if (old('cabang') == "3") {{ 'selected' }} @endif>Darmaraja</option>
                    <option value="12" @if (old('cabang') == "12") {{ 'selected' }} @endif>Cisitu</option>
                    <option value="14" @if (old('cabang') == "14") {{ 'selected' }} @endif>Cimanggung</option>
                    <option value="6" @if (old('cabang') == "6") {{ 'selected' }} @endif>Tanjungsari</option>
                    <option value="13" @if (old('cabang') == "13") {{ 'selected' }} @endif>Pamulihan</option>
                    <option value="1" @if (old('cabang') == "1") {{ 'selected' }} @endif>Sumedang Utara</option>
                    <option value="7" @if (old('cabang') == "7") {{ 'selected' }} @endif>Paseh</option>
                    <option value="8" @if (old('cabang') == "8") {{ 'selected' }} @endif>Cimalaka</option>
                    <option value="2" @if (old('cabang') == "2") {{ 'selected' }} @endif>Tanjungkerta</option>
                    <option value="4" @if (old('cabang') == "4") {{ 'selected' }} @endif>Situraja</option>
                    <option value="11" @if (old('cabang') == "11") {{ 'selected' }} @endif>Wado</option>
                    <option value="31" @if (old('cabang') == "31") {{ 'selected' }} @endif>Sumedang Selatan</option>
                    <option value="5" @if (old('cabang') == "5") {{ 'selected' }} @endif>Jatinangor</option>
                    <option value="40" @if (old('cabang') == "40") {{ 'selected' }} @endif>Mol Pelayan Publik</option>
                  </select>
                    @error('cabang')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        
          <div class="col-sm-4">
            <div class="form-group">
              <label>status</label>
              <input type="integer" class="form-control" name="status" value="1" readonly placeholder="aktip">
              @error('status')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2">
            <!-- textarea -->
            <div class="form-group">
              <label>No Rekening</label>
              <input type="integer" name="no_rekening" class="form-control" value="{{ old('no_rekening') }}">
              @error('no_rekening')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Nama Sekarang</label>
              <input type="text" class="form-control" name="nama_sekarang" value="{{ old('nama_sekarang') }}">
              @error('nama_sekarang')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Nama Pemilik</label>
              <input type="text" class="form-control" name="nama_pemilik" value="{{ old('nama_pemilik') }}">
              @error('nama_pemilik')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <label>No Rumah</label>
              <input type="text" class="form-control" name="no_rumah" value="{{ old('no_rumah') }}">
              @error('no_rumah')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2">
            <!-- textarea -->
            <div class="form-group">
              <label>RT</label>
              <input type="integer" class="form-control" name="rt" value="{{ old('rt') }}">
              @error('rt')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <label>RW</label>
              <input type="integer" class="form-control" name="rw" value="{{ old('rw') }}">
              @error('status')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <label>Blok</label>
              <input type="text" class="form-control" name="blok" value="{{ old('blok') }}">
              @error('blok')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <label>Dusun</label>
              <input type="text" class="form-control" name="dusun" value="{{ old('dusun') }}">
              @error('dusun')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Kecamatan</label>
              <input type="text" class="form-control" name="kecamatan" value="{{ old('kecamatan') }}">
              @error('kecamatan')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>
    
        <div class="row">
          <div class="col-md-4">
            <div>tatus Milik</div>
            <div class="form-group">
              <div class="form-check">
                <label class="form-check-label"><input class="form-check-input" type="checkbox" name="status_milik" id="status_milik">Sewa</label>
                @error('status_milik')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div></div>
               <label class="form-check-label"><input class="form-check-input" type="checkbox" name="status_milik" id="status_milik">Hak Milik</label>
               @error('status_milik')
               <div class="alert alert-danger">{{ $message }}</div>
               @enderror
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label>Jml Jiwa Tetap</label>
              <input type="integer" class="form-control" name="jml_jiwa_tetap" value="{{ old('jml_jiwa_tetap') }}">
              @error('jml_jiwa_tetap')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="col-sm-3">
            <div class="form-group">
              <label>Jml Jiwa Tidak teteap</label>
              <input type="integer" class="form-control" name="jml_jiwa_tidak_tetap" value="{{ old('jml_jiwa_tidak_tetap') }}">
              @error('jml_jiwa_tidak_tetap')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-6">
            <!-- checkbox -->
            <div class="form-group">
              <div class="form-input">
               <label>Tanggal Pasang</label>
                <input type="date" class="form-control" name="tanggal_pasang" value="{{ old('tanggal_pasang') }}">
                @error('tanggal_pasang')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
          </div>
    
          <div class="col-md-6">
            <!-- checkbox -->
            <div class="form-group">
              <div class="form-input">
               <label>Tanggal File</label>
                <input type="date" class="form-control" name="tanggal_file" value="{{ old('tanggal_file') }}">
                @error('tanggal_file')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
          </div>
      </div>
   

      <div class="row">
        <div class="col-md-2">
          <div>segel</div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label"><input class="form-check-input" type="checkbox" name="segel" id="segel">ada</label>
              @error('segel')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div></div>
             <label class="form-check-label"><input class="form-check-input" type="checkbox" name="segel" id="segel">tidak ada</label>
             @error('segel')
             <div class="alert alert-danger">{{ $message }}</div>
             @enderror
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div>stop kran</div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label"><input class="form-check-input" type="checkbox" name="stop_kran" id="stop_kran">ada</label>
              @error('stop_kran')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div></div>
             <label class="form-check-label"><input class="form-check-input" type="checkbox" name="stop_kran" id="stop_kran" value="tidak ada">tidak ada</label>
             @error('stop_kran')
             <div class="alert alert-danger">{{ $message }}</div>
             @enderror
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div>ceck valve</div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label"><input class="form-check-input" type="checkbox" name="ceck_valve" id="ceck_valve">ada</label>
              @error('ceck_valve')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div></div>
             <label class="form-check-label"><input class="form-check-input" type="checkbox" name="ceck_valve" id="ceck_valve">tidak ada</label>
             @error('ceck_valve')
             <div class="alert alert-danger">{{ $message }}</div>
             @enderror
            </div>
          </div>
        </div>
        
        <div class="col-md-2">
          <div>kopling</div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label"><input class="form-check-input" type="checkbox" name="kopling" id="kopling" value="ada">ada</label>
              @error('kopling')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div></div>
             <label class="form-check-label"><input class="form-check-input" type="checkbox" name="kopling" id="kopling" value="tidak ada">tidak ada</label>
             @error('kopling')
             <div class="alert alert-danger">{{ $message }}</div>
             @enderror
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div>plug</div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label"> <input class="form-check-input" name="plugran" value="ada" type="checkbox">ada</label>
              @error('plugran')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div></div>
              <label class="form-check-label"> <input class="form-check-input" name="plugran" value="tidak ada" type="checkbox">tidak ada</label>
              @error('plugran')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div>box</div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label"><input class="form-check-input" type="checkbox" name="box" id="box">ada</label>
              @error('box')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
               <div></div>
              <label class="form-check-label"><input class="form-check-input" type="checkbox" name="box" id="box">tidak ada</label>
              @error('box')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Sumber Lain</label>
              <input type="text" name="sumber_lain" class="form-control" value="{{ old('sumber_lain') }}">
              @error('sumber_lain')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Jenis Usaha</label>
              <input type="text" name="jenisusaha" class="form-control" value="{{ old('jenisusaha') }}">
              @error('jenis_usaha')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>
      
        <div class="row">
          <div class="col-sm-12">
            <!-- Select multiple-->
            <div class="form-group">
            <label>Merek Warter Meter</label>
            <select name="id_merek" class="form-control">
              <option value="">--- Merek ---</option>
              @foreach($mer as $item)
                  <option value="{{ $item->id }}" @if (old('id_merek') == "{{ $item->id }}") {{ 'selected' }} @endif>{{ $item->merek }}</option>
              @endforeach  
              @error('id_merek')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror  
            </select>
            </div>
          </div>
        </div>

    
        <div class="form-group">
          <button class="btn btn-primary">simpan</button>
         </div> 
      </div>
    </div>
  </div>
<form>
@endsection
