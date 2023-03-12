@extends('templates.v_template')
{{-- @section('title','Detail_pelanggan') --}}
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Detail Data Pelanggan</h5>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
<div class="card-group">
  <div class="card">
    <div class="card-body">
      <p class="card-text"><small class="text-muted">Nama : {{ $dataz->nama_sekarang }}</small></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <p class="card-text"><small class="text-muted">Nama : {{ $dataz->nama_sekarang }}</small></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

      <!-- /.card-header -->
      <div class="card-footer text-center">
        <a href="/dil" class="btn btn-sm btn-info text-center">Kembali Ke Halaman Utama</a>
      </div>
      <!-- ./card-body -->
      <!-- /.card-footer -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->





 
</div>
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

   