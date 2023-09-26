
@extends('templates.v_template')
@section('title',)
@section('content')
<section class="content">
  {{-- <div class="container"> --}}
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{ $tidakada }}</h3>
    
            <p>Pelanggan Tidak ada Segel</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="/test/tidakada" class="small-box-footer">Info Acc Segel Tidak Ada <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{ $ada }}<sup style="font-size: 20px"></sup></h3>
    
            <p>Pelanggan ada Segel</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="/test/ada" class="small-box-footer">Info Acc Segel Ada<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{ $stidakada }}</h3>

            <p>Pelanggan Tidak ada Stop Kran</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="/test/stidakada" class="small-box-footer"><span class="btn-sm">Info Acc Stop Kran Tidak Ada </span><i class="fas fa-arrow-circle-right"></i></a>
          
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{ $sada }}</h3>

            <p>Pelanggan ada Stop Kran</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="/test/sada" class="small-box-footer">Info Acc Stop Kran Ada <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->

  <!-- ./col -->

  <!-- ./col -->

    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $ctidakada }}</h3>
    
            <p>Pelanggan Tidak ada Ceck Valve</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="/test/cvtidakada" class="small-box-footer">Info Acc Segel Tidak Ada <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $cada }}<sup style="font-size: 20px"></sup></h3>
    
            <p>Pelanggan ada Ceck Valve</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="/test/cvada" class="small-box-footer">Info Acc Segel Ada<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{ $kada }}</h3>

            <p>Pelanggan Tidak ada Kopling</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="/test/kptada" class="small-box-footer">Info Acc Kopling Tidak Ada<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{ $ktidakada }}</h3>

            <p>Pelanggan ada Kopling</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="/test/kpada" class="small-box-footer">Info Acc Kopling Ada<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{ $ptidakada }}</h3>
    
            <p>Pelanggan Tidak ada Plugkran</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="/test/pktada" class="small-box-footer">Info Acc Plugkran Tidak Ada <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{ $pada }}<sup style="font-size: 20px"></sup></h3>
    
            <p>Pelanggan ada Plugkran</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="/test/pkada" class="small-box-footer">Info Acc Plugkran Ada<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{ $bada }}</h3>

            <p>Pelanggan Tidak ada Box</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="/test/bxada" class="small-box-footer">Info Acc Box Ada <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{ $btidakada }}</h3>

            <p>Pelanggan ada Box</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="/test/bxtada" class="small-box-footer">Info Acc Box Tidak Ada<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>

    
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-6 col-12">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $rtidakada }}</h3>
    
            <p>Pelanggan Rumah Milik Pribadi</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="/test/rada" class="small-box-footer">Info Pelanggan Rumah Sewa Percabang<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-6 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $rada }}<sup style="font-size: 20px"></sup></h3>
    
            <p>Pelanggan Rumah Sewa</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="/test/rtada" class="small-box-footer">Info Pelanggan Rumah Sewa Percabang<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    
@endsection


