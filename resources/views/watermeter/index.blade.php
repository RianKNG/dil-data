
@extends('layouts.v_template')
@section('title','Master Dil')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
  {{ $message }},
</div>
@endif



<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h6 class="card-title">Rabel Water Meter</h6>

              <div class="card-tools">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#exampleModal">
                    <span class = "btn-xs">Tambah WM (+)</span>
                  </button>
              </div>
            </div>
             
                            <!-- Button trigger modal -->

  
  <!-- Modal -->
            
            <!-- /.card-header -->
      
    
           
            <div class="card-body">
                <table class="table table-bordered">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th>id</th>
                    <th>Merek</th>
                    <th width="25%">Aksi</th>
                    
                  
                  </tr>
                </thead>
                <tbody>
          
                  @foreach ($data as $index => $k)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $k->id }}</td>  
                    <td>{{ $k->merek }}</td>
                      <td>
                        <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-edit" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="btn btn-success btn-xs"><i class="fa fa-info-circle" aria-hidden="true"></i>
                        </a>
                        <a href="dil/hapus/{{ $k->id }}" 
                          class="btn btn-danger btn-xs" 
                          data-toggle="modal" 
                          data-target="#delete{{ $k->id }}">
                          <i class="fa fa-trash" aria-hidden="true"></i>

                        </a>
                    </td>
                  </tr>
                      
              @endforeach
                
              </tbody>
            
              </table>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/watermeter/insert" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="integer" name="id" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" name="merek" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection
@section('script')
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
@endsection
