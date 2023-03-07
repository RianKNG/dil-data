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
                    IMPORT
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
            <div class="card card-outline card-warning">
            <div class="card-header">
                <h3 class="card-title">Expor Data Pdf</h3>
            </div>
            <div class="card-body">
                <a href="/exportpdf" class="btn btn-primary">Export</a>     
            </div>
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
