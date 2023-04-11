
@extends('templates.v_template')
@section('title','User Management')
@section('content')

<div class="container-fluid">
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Tabel User</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">

          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap btn-xs">
          <thead>
            <tr>
              <th width="5%">No.</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Password</th>
              <th>Ditulis</th>
              <th>Update</th>
              <th width="20%">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dataquery as $index => $k)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $k->name }}</td>
                    <td>{{ $k->email }}</td>
                    <td>{{ $k->password }}</td>
                    <td>{{ $k->created_at }}</td>
                    <td>{{ $k->updated_at }}</td>
                    <td>
                        <a href="#" class="btn btn-success btn-xs">Edit</a>
                        <a href="#" 
                          class="btn btn-danger btn-xs" 
                          data-toggle="modal" 
                          data-target="#delete{{ $k->id }}">
                          Delete
                        </a>
                    </td>
                </tr> 
             @endforeach
            
             
          </tbody>
        </table>
        
      
</section>
@endsection