@extends('templates.v_template')
@section('title',)
@section('content')
<h6><span> <i><b>Konsolidali</b></i></span></h6>
<section class="content">
  {{-- <div class="container"> --}}
    <!-- Small boxes (Stat box) -->
    
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-primary">
          <div class="inner">
            <h3>({{ number_format($tidakada ,0,",",".") }})<sup style="font-size: 20px"></sup></h3>
            {{-- <h3>{{ $tidakada }}</h3> --}}
    
            <p><i>Pelanggan Tidak ada Segel</i></p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="/test/tidakada" class="small-box-footer"><i>info</i>  <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>({{ number_format($ada ,0,",",".") }})<sup style="font-size: 20px"></sup></h3>
            {{-- <h3>{{ $ada }}<sup style="font-size: 20px"></sup></h3> --}}
    
            <p><i>Pelanggan ada Segel</i></p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="/test/ada" class="small-box-footer"><i>info</i>  <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>({{ number_format($stidakada ,0,",",".") }})<sup style="font-size: 20px"></sup></h3>
            {{-- <h3>{{ $stidakada }}</h3> --}}

            <p><i>Pelanggan Tidak ada Stop Kran</i></p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="/test/stidakada" class="small-box-footer"><span class="btn-sm"></span><i>info</i>  <i class="fas fa-arrow-circle-right"></i></a>
          
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>({{ number_format($sada ,0,",",".") }})<sup style="font-size: 20px"></sup></h3>
            {{-- <h3>{{ $sada }}</h3> --}}

            <p><i>Pelanggan ada Stop Kran</i></p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="/test/sada" class="small-box-footer"><i>info</i>  <i class="fas fa-arrow-circle-right"></i></a>
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
        <div class="small-box bg-primary">
          <div class="inner">
            <h3>({{ number_format($ctidakada ,0,",",".") }})<sup style="font-size: 20px"></sup></h3>
            {{-- <h3>{{ $ctidakada }}</h3> --}}
    
            <p><i>Pelanggan Tidak ada Ceck Valve</i></p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="/test/cvtidakada" class="small-box-footer"><i>info</i>  <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>({{ number_format($cada ,0,",",".") }})<sup style="font-size: 20px"></sup></h3>
            {{-- <h3>{{ $cada }}<sup style="font-size: 20px"></sup></h3> --}}
    
            <p><i>Pelanggan ada Ceck Valve</i></p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="/test/cvada" class="small-box-footer"><i>info</i>  <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>({{ number_format($kada ,0,",",".") }})<sup style="font-size: 20px"></sup></h3>
            {{-- <h3>{{ $kada }}</h3> --}}

            <p><i>Pelanggan Tidak ada Kopling</i></p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="/test/kptada" class="small-box-footer"><i>info</i>  <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>({{ number_format($tidakada ,0,",",".") }})<sup style="font-size: 20px"></sup></h3>
            {{-- <h3>{{ $ktidakada }}</h3> --}}

            <p><i>Pelanggan ada Kopling</i></p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="/test/kpada" class="small-box-footer"><i>info</i>  <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-primary">
          <div class="inner">
            <h3>({{ number_format($ptidakada ,0,",",".") }})<sup style="font-size: 20px"></sup></h3>
            {{-- <h3>{{ $ptidakada }}</h3> --}}
    
            <p><i>Pelanggan Tidak ada Plugkran</i></p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="/test/pktada" class="small-box-footer"><i>info</i>  <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            {{-- <h3>{{ $pada }}<sup style="font-size: 20px"></sup></h3> --}}
            <h3>({{ number_format($pada ,0,",",".") }})<sup style="font-size: 20px"></sup></h3>
    
            <p><i>Pelanggan ada Plugkran</i></p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="/test/pkada" class="small-box-footer"><i>info</i>  <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            {{-- <h3>{{ $bada }}</h3> --}}
            <h3>({{ number_format($bada ,0,",",".") }})<sup style="font-size: 20px"></sup></h3>

            <p><i>Pelanggan Tidak ada Box</i></p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="/test/bxada" class="small-box-footer"><i>info</i>  <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>({{ number_format($btidakada ,0,",",".") }})<sup style="font-size: 20px"></sup></h3>
            {{-- <h3>{{ $btidakada }}</h3> --}}
            

            <p><i>Pelanggan ada Box</i></p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="/test/bxtada" class="small-box-footer"><i>info</i>  <i class="fas fa-arrow-circle-right"></i></a>
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
            {{-- <h3>{{ $rtidakada }}</h3> --}}
            <h3>({{ number_format($rtidakada ,0,",",".") }})<sup style="font-size: 20px"></sup></h3>
    
            <p><i>Pelanggan Rumah Milik Pribadi</i></p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          
          <a href="/test/rada" class="small-box-footer"><i>Pelanggan Rumah Hak Milik Percabang</i> <i>info</i>  <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-6 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            
            {{-- <h3>{{ $rada }}<sup style="font-size: 20px"></sup></h3> --}}
            <h3>({{ number_format($rada ,0,",",".") }})<sup style="font-size: 20px"></sup></h3>
    
            <p><i>Pelanggan Rumah Sewa</i></p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="/test/rtada" class="small-box-footer"><i>Pelanggan Rumah Sewa Percabang</i> <i>info</i>  <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    
@endsection