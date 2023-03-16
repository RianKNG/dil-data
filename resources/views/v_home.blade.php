
@extends('templates.v_template')
@section('title',)
 <h6><span> <i><b>Dashboard</b></i></span></h6>
@endsection
    @php
      $tanggal = date('F Y');
      $tahun = date('Y');
    @endphp
@section('tet')

     @php
    if (isset($_server['HTTPS']) && $_SERVER['HTTPS'] ==='on') {
      $url="https://";
    } else {
      $url="http://";
      $url.=$_SERVER['HTTP_HOST'];
      $url.=$_SERVER['REQUEST_URI'];
      $url;
    }
    $page=$url;
    $sec="5";
    @endphp
@endsection
    @section('content')
    <div class="container">
        <!-- Info boxes -->
       
        <h6><span> <i><b>Update Konsolidasi D I L Bulan : {{ $tanggal }}</b></i></span></h6>
        <div class="row">
          
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box btn-xs">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
              
              <div class="info-box-content">
                <span class="info-box-text">Dil Baru</span>
                <span class="info-box-number">
                  {{ $databilling }}
                  <small></small>
                </span>
                <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-xl">
                  Sync Data
                </button>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3 btn-xs">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Penutupan</span>
                <span class="info-box-number">{{ $jumlahtutup }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box btn-xs">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
              
              <div class="info-box-content">
                <span class="info-box-text">Dil Baru</span>
                <span class="info-box-number">
                  {{ $databilling }}
                  <small></small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3 btn-xs">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Penutupan</span>
                <span class="info-box-number">{{ $dataz }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3 btn-xs">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-plus-square"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Penyambungan</span>
                <span class="info-box-number">{{ $dataz }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
    
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3 btn-xs">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
    
              <div class="info-box-content">
                <span class="info-box-text">Penggantian</span>
                <span class="info-box-number">{{ $datagan }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
         
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3 btn-xs">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-edit"></i></span>
   
              <div class="info-box-content">
                <span class="info-box-text">Bbn</span>
                <span class="info-box-number">{{ $datad }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3 btn-xs">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
  
              <div class="info-box-content">
                <span class="info-box-text">Total DIL</span>
                <span class="info-box-number">{{ $jumlahdil }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Monthly Recap Report</h5>

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
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <p class="text-center">
                      <strong>{{ $tanggal }}</strong>
                    </p>

                    <div class="chart">
                      <!-- Sales Chart Canvas -->
                     <div id="x"></div>
                    </div>
                    <!-- /.chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <p class="text-center">
                      <strong>{{ $tanggal }}</strong>
                    </p>

                    <div class="progress-group">
                      <div id="container"></div>
                    </div>
                    <!-- /.progress-group -->

                

                    <!-- /.progress-group -->
                   

                   
                    <!-- /.progress-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
        <!-- /.row -->
    
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <!-- MAP & BOX PANE -->
            <!-- /.card -->
    
            <!-- /.row -->
    
            <!-- TABLE: LATEST ORDERS -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
    
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
      <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Konsumen</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table>
                <tr>
                  <thead>
                    <tr>
                      <th width="5%">No.</th>
                      <th>No Sambungan</th>
                      <th>tanggal_ganti</th>
                      <th>merek Lama</th>
                      <th>merek Baru</th>
                      <th>no WM Baru</th>
                      <th>Status</th>
                      <th width="20%">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach ($databill as $index => $k)
                   
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $k->id }}</td>
                        <td>{{ $k->nama_sekarang }}</td>
                        <td>{{ $k->cabang }}</td>
                     
                        <td>{{ $k->id_merek }}</td>
                        {{-- <td>{{ $k->merek }}</td> --}}
                       
                    
        
                             
                    </tr> 
                   
                 @endforeach
                
                   
                  </tbody>
                </table>
                </tr>
              </table>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    
  
      <script src="https://code.highcharts.com/highcharts.js"></script>
      <script src="https://code.highcharts.com/modules/series-label.js"></script>
      <script src="https://code.highcharts.com/modules/exporting.js"></script>
      <script src="https://code.highcharts.com/modules/export-data.js"></script>
      <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    
    <script type="text/javascript">
    let b =  {!! json_encode($datac) !!};
    Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Batang'
    },
    subtitle: {
        text: 'Sejatinya Tukang Ledeng Sejati'
    },
    xAxis: {
        categories: {!! json_encode($categories) !!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rainfall (mm)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Penggantian',
        data: b
    }]
       
});
</script>
    <script type="text/javascript">
    let a =  {!! json_encode($datas) !!};
   
    // let c =  {!! json_encode($datac) !!};
    // let d =  {!! json_encode($datad) !!};
    Highcharts.chart('x', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Tahun {{ $tahun }}'
    },
    subtitle: {
        text:
            'Sejatinya tukang ledeng sejati'
    },
    xAxis: {
        categories: {!! json_encode($categories) !!},
        crosshair: true
      
    },
    yAxis: {
        title: {
            text: 'Interval(0.25)'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Penyambungan',
        data: a
    }]
});
</script>
   
    
    @endsection