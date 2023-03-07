@extends('templates.v_template')
@section('title','Tambah Data')
@section('content')

  <!-- Main content -->
  <form action="/penutupan/insert" method="post" enctype="multipart/form-data">
    @csrf
 <section class="content">
  <div class="container-fluid">
    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">---Tambah Data---</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="col-md-6">
        <div class="form-group">
          <div class="form-group row">
            <label for="id_dil" class="col-sm-2 col-form-label">id_dil</label>
            <div class="col-sm-10">
              <input 
              type="integer" 
              name="id_dil" 
              class="form-control">
            </div>
          </div> 
          <div class="form-group row">
            <label for="merek" class="col-sm-2 col-form-label">mrj</label>
            <div class="col-sm-10">
              <input 
              type="date" 
              name="merek" 
              class="form-control">
            </div>
          </div> 
          <div class="form-group row">
            <label for="tanggal_tutup" class="col-sm-2 col-form-label">tanggal_ditutup</label>
            <div class="col-sm-10">
              <input 
              type="date" 
              name="tanggal_tutup" 
              class="form-control">
            </div>
          </div> 
          <div class="form-group row">
            <label for="alasan" class="col-sm-2 col-form-label">alasan</label>
            <div class="col-sm-6">
              <select class="custom-select">
                <option selected>Pilih Jenis Kelamin</option>
                <option value="nunggak">Nunggak</option>
                <option value="mengundurkan diri">Mundur</option>
              </select>
            </div>
          </div> 
         
          <div class="form-group">
            <button class="btn btn-primary">simpan</button>
           </div> 
        </div>
    <!-- /.card -->
    
<form> 
@endsection
