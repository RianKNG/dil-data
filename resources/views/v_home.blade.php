
@extends('templates.v_template')
@section('title',)
 <h6><span> <i><b>Dashboard</b></i></span></h6>
@endsection
    @php
      $tanggal = date('F Y');
      $tahun = date('Y');
    @endphp
  
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
                  {{ $datadil }}
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
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-book"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Penutupan</span>
                <span class="info-box-number">{{ $data }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3 btn-xs">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-book"></i></span>

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
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
    
              <div class="info-box-content">
                <span class="info-box-text">Bbn</span>
                <span class="info-box-number">0</span>
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
                <span class="info-box-number">0</span>
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
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="#" class="dropdown-item">Action</a>
                      <a href="#" class="dropdown-item">Another action</a>
                      <a href="#" class="dropdown-item">Something else here</a>
                      <a class="dropdown-divider"></a>
                      <a href="#" class="dropdown-item">Separated link</a>
                    </div>
                  </div>
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
    
  
      <script src="https://code.highcharts.com/highcharts.js"></script>
      <script src="https://code.highcharts.com/modules/series-label.js"></script>
      <script src="https://code.highcharts.com/modules/exporting.js"></script>
      <script src="https://code.highcharts.com/modules/export-data.js"></script>
      <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    
    <script type="text/javascript">
    // let a =  {!! json_encode($datat) !!};
    let b =  {!! json_encode($datas) !!};
    // let c =  {!! json_encode($datac) !!};
    // let d =  {!! json_encode($datad) !!};
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
        name: 'Penyambungan',
        data: b
    }]
       
});
</script>
    <script type="text/javascript">
    let a =  {!! json_encode($datat) !!};
    // let b =  {!! json_encode($datas) !!};
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