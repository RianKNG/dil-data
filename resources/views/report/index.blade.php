
@extends('templates.v_template')
@section('title','Informasi Detail Perpelanggan')
@section('content')
<form action="/report/search/" method="post" enctype="multipart/form-data">
  @csrf
<div class="row filter-row">
    <div class="col-sm-6 col-md-3">
      <label class="focus-label">Test Cabang</label>
      <select name="cabang" class="form-control">
        <option value="cabang">Semua</option> 
        <option value="31">Situraja</option> 
        <option value="3">Pamulihan</option> 
      </select>
        <div>
            <button type="submit" class="bnt btn-success">Search</button>
        </div>
    </div>
</div>
</form>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Penutupan</h3>
  
          <div class="card-tools">
            {{-- <div class="input-group input-group-sm" style="width: 150px;">
              <input type="search" name="search" class="form-control float-right" placeholder="search">
              <form action="/penutupan" method="GET">
                <input type="search" class="form-control" name="search" placeholder="Cari ">
              </form>
            </div> --}}
          </div>
        </div>
        <!-- /.card-header -->
      
          <!-- /.card-header -->
          <div class="card-body">
            <table id="table" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th width="5%">No.</th>
                  <th>No Sambungan</th>
                  
                  <th>cabang</th>
                  <th>Tanggal_ganti</th>
                  <th>merek Baru</th>
                  <th>no WM Baru</th>
                  <th>no WM Baru</th>
                </tr>
              </thead>
          <tbody>
            @foreach ($dil as $index => $k)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $k->id }}</td>
                <td>{{ $k->cabang }}</td>
                <td>{{ $k->tanggal_tutup }}</td>
                <td>{{ $k->tanggal_ganti }}</td>
                <td>{{ $k->tanggal_sambung }}</td>
                <td>{{ $k->merek }}</td>
    
            </tr> 
         @endforeach
           
          </tbody>
        </table>
{{ $dilCount }}
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

</div>
<!-- /.row -->
</section>

@endsection

@push('scripts')
<script>
  $(document).ready(function () {
    $('#table').DataTable({
      "responsive": true,"autoWidth": false,
        lengthMenu: [
            [15, 25, 50,100, -1],
            [15, 25, 50,100, 'All'],
        ],
    });
  });
  </script>
@endpush


