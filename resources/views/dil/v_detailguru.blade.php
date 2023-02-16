@extends('layout.v_template')
@section('title','detail')
@section('content')
<div class="row">
     <!-- /.col -->
             <!-- /.col -->
             <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">@yield('title')</h3>
      
                    <div class="box-tools pull-right">

                    </div>
                    <!-- /.box-tools -->
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">          <!-- /.col -->
                <thead>
                    <tr>
                        <td>Nip</td>
                        <td>:</td>
                        <td>{{ $guru->nip }}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ $guru->nama }}</td>
                    </tr>
                    <tr>
                        <td>Matkul</td>
                        <td>:</td>
                        <td>{{ $guru->matkul }}</td>
                    </tr>
                    <tr>
                        <td>Foto</td>
                        <td>:</td>
                        <td><img src="{{ url('foto/'.$guru->foto) }}" alt="" width="20%" > </td>
                        
                    </tr> 
                    

                </thead>
                
            </table>
            <tr>
                <a href="/guru" class="btn btn-primary btn-xs" >Kembali</a> 
             </tr> 
           <div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
 
@endsection








                   