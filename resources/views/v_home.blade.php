
@extends('templates.v_template')
@section('title',)

{{ bulankita('2021-02-02') }}
 <h6><span> <i><b>Dashboard</b></i></span></h6>

@endsection
    @php
      $tanggal = date('F Y');
      $tahun = date('Y s');
      $jam = date("h:i:sa");
    @endphp
@section('tabel')

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
          
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box btn-xs">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-restroom"></i></span>
              
              <div class="info-box-content">
                <span class="info-box-text">Dil Baru</span>
                <span class="info-box-number">
                  {{ $databilling }}
                  <small></small>
                </span>
                <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-x">
                  Sync Data
                </button>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3 btn-xs">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-nurse"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Penutupan</span>
                <span class="info-box-number">{{ $datatutupjumlah }}</span>
                <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-t">
                  Sync Data
                </button>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
         
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box btn-xs">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-copy"></i></span>
              
              <div class="info-box-content">
                <span class="info-box-text">Pelanggan Aktip</span>
                <span class="info-box-number">
                  {{ $databilling }}
                  <small></small>
                </span>
                <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-xl">
                  Sync Data
                </button>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          {{-- <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3 btn-xs">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-nurse"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Penutupan</span>
                <span class="info-box-number">{{ $dataz }}</span>
                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-xl">
                  Sync Data
                </button>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div> --}}
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3 btn-xs">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-plus-square"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Penyambungan</span>
                <span class="info-box-number">{{ $dataz }}</span>
                <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-xl">
                  Sync Data
                </button>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
    
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3 btn-xs">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user"></i></span>
    
              <div class="info-box-content">
                <span class="info-box-text">Penggantian</span>
                <span class="info-box-number">{{ $datagan }}</span>
                <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-xl">
                  Sync Data
                </button>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
         
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3 btn-xs">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-edit"></i></span>
   
              <div class="info-box-content">
                <span class="info-box-text">Bbn</span>
                <span class="info-box-number">{{ $datad }}</span>
                <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-xl">
                  Sync Data
                </button>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3 btn-xs">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-briefcase"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pelanggan Non aktip</span>
                <span class="info-box-number">#</span>
                <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-xl">
                  Sync Data
                </button>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3 btn-xs">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
  
              <div class="info-box-content">
                <span class="info-box-text">Total DIL</span>
                <span class="info-box-number">{{ $jumlahdil }}</span>
                <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-xl">
                  Sync Data
                </button>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Sekarang : {{ $tanggal }}||{{ $jam }}</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    
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
                      {{-- <strong>{{ $tanggal }}</strong> --}}
                    </p>

                    <div class="chart">
                      <!-- Sales Chart div -->
                      <div id="container" height="180" style="height: 300px;"></div>
                    </div>
                    <!-- /.chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <p class="text-center">
                      {{-- <strong>Goal Completion</strong> --}}
                    </p>

                    <div class="chart">
                      <div id="x" height="180" style="height: 300px;"></div>
                    </div>


                    <!-- /.progress-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
    
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
 <!-- Main content -->
 <div class="modal fade" id="modal-x">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Dil Baru</h4>
      </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                    <tr>
                      <th width="5%">No.</th>
                      <th>No Sambungan</th>
                      <th>Nama Sekarang</th>
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
              <button type="button" class="btn btn-success col sm-12" data-dismiss="modal">kembali</button>
              
              {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      
      {{-- Modal-t --}}
      <div class="modal fade" id="modal-t">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Konsumen</h4>
            </div>
            
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover"> 
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
                    
                    @foreach ($jumlahtutup as $index => $k)
                   
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $k->id }}</td>
                        <td>{{ $k->nama_sekarang }}</td>
                        <td>{{ bulankita($k->tanggasambung) }}</td>
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
      <script src="https://code.highcharts.com/highcharts-3d.js"></script>
      <script src="https://code.highcharts.com/modules/exporting.js"></script>
      <script src="https://code.highcharts.com/modules/export-data.js"></script>
      <script src="https://code.highcharts.com/modules/accessibility.js"></script>
      <script type="text/javascript">
        let a =  {!! json_encode($datas) !!};
        // let b =  {!! json_encode($cobacabang) !!};
        let c =  {!! json_encode($cobaa) !!};
const chart = new Highcharts.Chart({
    chart: {
        renderTo: 'container',
        type: 'column',
        options3d: {
            enabled: true,
            alpha: 25,
            beta: 5,
            depth: 50,
            viewDistance: 25
        }
    },
    xAxis: {
        categories: c,
    },
    yAxis: {
        title: {
            enabled: true
        }
    },
    tooltip: {
        headerFormat: '<b>{point.key}</b><br>',
        pointFormat: 'Jumlah: {point.y}'
    },
    title: {
        text: 'Grafik 3D DIL',
        align: 'center'
    },
    subtitle: {
        text: 'Sejatinya ' +
            'Tukang Ledeng' +
            'Sejati',
        align: 'center'
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        column: {
            depth: 50
        }
    },
    series: [{
        data: a,
        colorByPoint: true
    }]
});

function showValues() {
    document.getElementById('alpha-value').innerHTML = chart.options.chart.options3d.alpha;
    document.getElementById('beta-value').innerHTML = chart.options.chart.options3d.beta;
    document.getElementById('depth-value').innerHTML = chart.options.chart.options3d.depth;
}

// Activate the sliders
document.querySelectorAll('#sliders input').forEach(input => input.addEventListener('input', e => {
    chart.options.chart.options3d[e.target.id] = parseFloat(e.target.value);
    showValues();
    chart.redraw(false);
}));

showValues();

<!-- #END# Bar Chart -->

</script>
<script type="text/javascript">
                var s = {{ $dataz }};
                // var t = {{ $jumlahtutup }};
                var u = {{ $databilling }};
                var v = {{ $datagan }};
                var w = {{ $datagan }};
                var x = {{ $jumlahdil }};


Highcharts.chart('x', {
  chart: {
      type: 'pie',
      options3d: {
          enabled: true,
          alpha: 45,
          beta: 0
      }
  },
  title: {
      text: 'Grafk Lingkaran',
      align: 'center'
  },
  subtitle: {
      text: '{{ $tanggal }}'  +
          '' +
          '',
      align: 'center'
  },
  accessibility: {
      point: {
          valueSuffix: '%'
      }
  },
  tooltip: {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
  plotOptions: {
      pie: {
          allowPointSelect: true,
          cursor: 'pointer',
          depth: 35,
          dataLabels: {
              enabled: true,
              format: '{point.name}'
          }
      }
  },
  series: [{
      type: 'pie',
      name: 'DIL',
      data: [
          ['Data Rekening Aktip', s],
          // ['Penutupan', t],
          {
              name: 'Penyambungan',
              y: s,
              sliced: true,
              selected: true
          },
          ['penggantian', v],
          ['Dil Aktip', w],
          
      ]
  }]
});
</script>  


      {{-- <script src="https://code.highcharts.com/highcharts.js"></script>
      <script src="https://code.highcharts.com/modules/series-label.js"></script>
      <script src="https://code.highcharts.com/modules/exporting.js"></script>
      <script src="https://code.highcharts.com/modules/export-data.js"></script>
      <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    
    <script type="text/javascript">
    let a =  {!! json_encode($datas) !!};
    let b =  {!! json_encode($cobacabang) !!};
    let c =  {!! json_encode($coba) !!};
    Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Batang'
    },
    subtitle: {
        text: 'Sejatinya Tukang Ledeng Sejatirrrr'
    },
    xAxis: {
        // categories: c,
        categories: c,
        crosshair: false
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
        data: a
    }]
});
</script>
</script> --}}
      {{-- <script src="https://code.highcharts.com/highcharts.js"></script>
      <script src="https://code.highcharts.com/modules/series-label.js"></script>
      <script src="https://code.highcharts.com/modules/exporting.js"></script>
      <script src="https://code.highcharts.com/modules/export-data.js"></script>
      <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    
    <script type="text/javascript">
    let a =  {!! json_encode($datas) !!};
    let b =  {!! json_encode($cobacabang) !!};
    let c =  {!! json_encode($coba) !!};
    Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Batang'
    },
    subtitle: {
        text: 'Sejatinya Tukang Ledeng Sejatirrrr'
    },
    xAxis: {
        // categories: c,
        categories: c,
        crosshair: false
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
        data: a
    }]
});
</script> --}}
    {{-- <script type="text/javascript">
    let a =  {!! json_encode($datas) !!};
    let b =  {!! json_encode($datac) !!};
    let c =  {!! json_encode($coba) !!};
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
        categories: c,
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
    },{
        name: 'Penggantuann',
        data: b
    }]
});
</script> --}}
   
   
@endsection
