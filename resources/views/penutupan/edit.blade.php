@extends('templates.v_template')
@section('title','edit_guru')
@section('content')



<form action="/penutupan/update/{{ $data->id }}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="row">
    <!-- /.col -->
            <!-- /.col -->
         
 
            <div class="col-md-6">
              <div class="form-group">
                <div class="form-group row">
                  <label for="id" class="col-sm-2 col-form-label">no_id</label>
                  <div class="col-sm-10">
                    <input 
                    type="text" 
                    value="{{ $data->id }}"
                    name="id" 
                    class="form-control">
                  </div>
                </div> 
            <div class="col-md-6">
              <div class="form-group">
                <div class="form-group row">
                  <label for="tanggal_tutup" class="col-sm-2 col-form-label">tanggal_tutup</label>
                  <div class="col-sm-10">
                    <input 
                    type="date" 
                    value="{{ $data->tanggal_tutup }}"
                    name="tanggal_tutup" 
                    class="form-control">
                  </div>
                </div> 
                <div class="form-group row">
                  <label for="alasan" class="col-sm-2 col-form-label">alasan</label>
                  <div class="col-sm-10">
                    <input 
                    type="text" 
                    value="{{ $data->alasan }}"
                    name="alasan" 
                    class="form-control">
                  </div>
                </div> 
                <div class="form-group row">
                  <label for="nama_sekarang" class="col-sm-2 col-form-label">alasan</label>
                  <div class="col-sm-10">
                    <input class="btn-info btn-sm"
                    type="text" 
                    value="{{ $data->id_dil }}"
                    name="nama_sekarang" 
                    class="form-control"readOnly=true>
                  </div>
                </div> 
                <div class="form-group">
                  <button class="btn btn-primary">simpan</button>
                 </div> 
              </div>
            <form>
  

@endsection
