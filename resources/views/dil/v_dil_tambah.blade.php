
@extends('layouts.v_template')
@section('title','Tambah Data')
@section('content')
<section class="content btn-xs">
  <div class="container-fluid">
    
<form action="/dil/insert" method="post" enctype="multipart/form-data">
  @csrf

   <!-- SELECT2 EXAMPLE -->
  </div>
  <!-- general form elements disabled -->
  <div class="card card-warning card card-outline">
    <div class="card-header">
      <h6 >Form Tambah Data Dil</h6>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form>
        <div class="row">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>No Sambungan</label>
              <input type="integer" class="form-control btn-xs" name="id" placeholder="harus 10 digit">
              @error('id')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form">
              <label>Status Tidak Bisa diisi Sudah terisi Otomatis</label>
              <input type="integer" class="form-control btn-xs btn-success" name="status" value="1" readOnly>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2">
            <!-- textarea -->
            <div class="form-group">
              <label>No Rekening</label>
              <input type="integer" name="no_rekening" class="form-control btn-xs" placeholder="harus angka 5 digit">
              @error('no_rekening')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Nama Sekarang</label>
              <input type="text" class="form-control btn-xs" name="nama_sekarang">
              @error('nama_sekarang')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Nama Pemilik</label>
              <input type="text" class="form-control btn-xs" name="nama_pemilik">
              @error('nama_pemilik')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <label>No Rumah</label>
              <input type="text" class="form-control btn-xs" name="no_rumah" placeholder="harus angka">
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
              <input type="integer" class="form-control btn-xs" name="rt" placeholder="harus angka">
              @error('rt')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <label>RW</label>
              <input type="integer" class="form-control btn-xs" name="rw" placeholder="harus angka">
              @error('re')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <label>Blok</label>
              <input type="text" class="form-control btn-xs" name="blok" placeholder="harus huruf">
              @error('blok')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <label>Dusun</label>
              <input type="text" class="form-control btn-xs" name="dusun" placeholder="harus huruf">
              @error('dusun')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Kecamatan</label>
              <input type="text" class="form-control btn-xs" name="kecamatan" placeholder="harus huruf">
              @error('kecamata')
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
                <label class="form-check-label"> <input class="form-check-input" name="status_milik" value="sewa" type="checkbox">sewa</label>
                <div></div>
                <label class="form-check-label"> <input class="form-check-input" name="status_milik" value="hak_milik" type="checkbox">Hak Milik</label>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label>jml_jiwa_tetap</label>
              <input type="integer" class="form-control btn-xs" name="jml_jiwa_tetap" placeholder="harus angka">
              @error('jml_jiwa_tetap')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
          </div>

          <div class="col-sm-3">
            <div class="form-group">
              <label>jml_jiwa_tidak_tetap</label>
              <input type="integer" class="form-control btn-xs" name="jml_jiwa_tidak_tetap" placeholder="harus angka">
              @error('jml_jiwa_tidak_tetap')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-2">
            <!-- checkbox -->
            <div class="form-group">
              <div class="form-input">
               <label>Tanggal Pasang</label>
                <input type="date" class="form-control btn-xs" name="tanggal_pasang" placeholder="klik lambang">
                @error('tanggal_pasang')
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
              <label class="form-check-label"> <input class="form-check-input" name="segel" value="ada" type="checkbox">ada</label>
              <div></div>
              <label class="form-check-label"> <input class="form-check-input" name="segel" value="tidak ada" type="checkbox">tidak ada</label>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div>stop kran</div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label"> <input class="form-check-input" name="stop_kran" value="ada" type="checkbox">ada</label>
              <div></div>
              <label class="form-check-label"> <input class="form-check-input" name="stop_kran" value="tidak ada" type="checkbox">tidak ada</label>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div>ceck valve</div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label"> <input class="form-check-input" name="ceck_valve" value="ada" type="checkbox">ada</label>
              <div></div>
              <label class="form-check-label"> <input class="form-check-input" name="ceck_valve" value="tidak ada" type="checkbox">tidak ada</label>
            </div>
          </div>
        </div>
        
        <div class="col-md-2">
          <div>kopling</div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label"> <input class="form-check-input" name="kopling" value="ada" type="checkbox">ada</label>
              <div></div>
              <label class="form-check-label"> <input class="form-check-input" name="kopling" value="tidak ada" type="checkbox">tidak ada</label>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div>plug</div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label"> <input class="form-check-input" name="plugran" value="ada" type="checkbox">ada</label>
              <div></div>
              <label class="form-check-label"> <input class="form-check-input" name="plugran" value="tidak ada" type="checkbox">tidak ada</label>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div>box</div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label"> <input class="form-check-input" name="box" value="ada" type="checkbox">ada</label>
              <div></div>
              <label class="form-check-label"> <input class="form-check-input" name="box" value="tidak ada" type="checkbox">tidak ada</label>
            </div>
          </div>
        </div>
        </div>
       

      
        <div class="row">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Bulan Billing</label>
              <input type="text" name="bln_billing" class="form-control btn-xs" placeholder="harus angka 2 angka apabila 1 angka tambahin 0">
              @error('bln_billing')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Tahun Billing</label>
              <input type="text" name="thn_billing" class="form-control btn-xs" placeholder="harus angka 4 angka">
              @error('thn_billing')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Sumber Lain</label>
              <input type="text" name="sumber_lain" class="form-control btn-xs">
              @error('sumber_lain')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Jenis Usaha</label>
              <input type="text" name="jenisusaha" class="form-control btn-xs">
              @error('jenisusaha')
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
              <select multiple class="form-control btn-xs" name="id_merek">
                <option value="1">Barindo</option>
                <option value="2">Linflow</option>
               
              </select>
            </div>
            @error('id_merek')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
          </div>
        </div>
    
    <div class="form-group">
      <button class="btn btn-primary">simpan</button>
     </div> 
  </div>
</div>
<form>
@endsection

