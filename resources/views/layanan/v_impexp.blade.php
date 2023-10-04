@extends('templates.v_template')
@section('title','layanan')
@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
            <div class="card card-outline card-success">
            <div class="card-header">
                <h3 class="card-title">Impor Data DIL</h3>
            </div>
            <div class="card-body">
                
                <div>
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#import">
                    Import
                </button>
               
          </div>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-outline card-warning">
            <div class="card-header">
                <h3 class="card-title">Download DIL</h3>
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#export">
                    Download
                </button>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-outline card-danger">
            <div class="card-header">
                <h3 class="card-title">Download All Data Status Pdf</h3>
            </div>
            <div class="card-body">
                <a href="/exportpdf" class="btn btn-danger">Download Pdf All Data Status</a>     
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-outline card-danger">
            <div class="card-header">
                <h3 class="card-title">Expor Data Pdf Aktip</h3>
            </div>
            <div class="card-body">
                <a href="/exportpdfa" class="btn btn-danger">Download Pdf Aktip</a>     
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Expor Data Pdf Non Aktip</h3>
            </div>
            <div class="card-body">
                <a href="/exportpdfn" class="btn btn-primary">Download Pdf Non Aktip</a>     
            </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Cetak Laporan PenutupanSL</h3>
            </div>
            
            <div class="my-0">
                <form action="/dil/cetaklaporan" method="GET">
                    <div class="input-group">
                        <input type="date" class="form-control" name="start_date">
                        <input type="date" class="form-control" name="end_date">
                        <button class="btn btn-primary" type="submit">GET</button>
                    </div>
                </form>
            </div>
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Cetak SL Baru</h3>
                </div>
                
                <div class="my-0">
                    <form action="/dil/cetaklaporansl" method="GET">
                        <div class="input-group">
                            <input type="date" class="form-control" name="start_date">
                            <input type="date" class="form-control" name="end_date">
                            <button class="btn btn-primary" type="submit">GET</button>
                        </div>
                    </form>
                </div>
            <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Cetak Laporan PenyambunganSL</h3>
            </div>
            
            <div class="my-0">
                <form action="/dil/cetaklaporanpenyambungan" method="GET">
                    <div class="input-group">
                        <input type="date" class="form-control" name="start_date">
                        <input type="date" class="form-control" name="end_date">
                        <button class="btn btn-primary" type="submit">GET</button>
                    </div>
                </form>
            </div>
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Cetak Laporan Ganti SL</h3>
                </div>
                
                <div class="my-0">
                    <form action="/dil/cetaklaporanpenggantian" method="GET">
                        <div class="input-group">
                            <input type="date" class="form-control" name="start_date">
                            <input type="date" class="form-control" name="end_date">
                            <button class="btn btn-primary" type="submit">GET</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
<!-- modal -->
<div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
           
            <form action="/importexcel" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>PILIH FILE</label>
                        <input type="file" name="file" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                    <button type="submit" class="btn btn-success">IMPORT</button>
                </div>
            </form>
        </div>
    </div>
  </div>
<!-- modal -->
<div class="modal fade" id="export" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
           
            <form action="/importexcel" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Silahkan Donwnload seluruh Data</label>
                        <a href="/exportexcel" class="btn btn-primary btn-md">Import</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>

@endsection
