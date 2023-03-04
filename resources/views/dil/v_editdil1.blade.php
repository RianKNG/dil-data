@extends('layouts.v_template')
@section('title','edit_guru')
@section('content')

 <form action="/dil/update/{{ $data->id }}" method="post" enctype="multipart/form-data">
    @csrf
          <div class="row">
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
                    <label for="no_sambungan" class="col-sm-2 col-form-label">no_sambungan</label>
                    <div class="col-sm-10">
                      <input 
                      type="text" 
                      value="{{ $data->no_sambungan }}"
                      name="no_sambungan" 
                      class="form-control">
                    </div>
                  </div> 
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">nama</label>
                    <div class="col-sm-10">
                      <input 
                      type="text" 
                      value="{{ $data->nama }}"
                      name="nama" 
                      class="form-control">
                    </div>
                  </div> 
                  <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
                    <div class="col-sm-10">
                      <input 
                      type="text" 
                      value="{{ $data->alamat }}"
                      name="alamat" 
                      class="form-control">
                    </div>
                  </div> 
                  <div class="form-group row">
                    <label for="merek" class="col-sm-2 col-form-label">merek</label>
                    <div class="col-sm-10">
                      <input 
                      type="text" 
                      value="{{ $data->merek }}"
                      nama="merek" 
                      class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary">simpan</button>
                   </div> 
                </div>
              <form>
    

@endsection
{{-- @section('javascript')
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection --}}

   