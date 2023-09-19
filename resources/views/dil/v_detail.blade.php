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
             
             
              <p class="card-text"><span class="text-muted">No Sambungan : {{ $dataz->id }}</span></p>
              <p class="card-text"><span class="text-muted">Nama : 
                @if ($dataz->cabang == 1)
                Sumedang Utara
                @elseif($dataz->cabang == 2)
                Tanjungkerta
                @elseif($dataz->cabang == 3)
                Darmaraja
                @elseif($dataz->cabang == 4)
                Situraja
                @elseif($dataz->cabang == 5)
                Jatinangor
                @elseif($dataz->cabang == 6)
                Tanjungsari
                @elseif($dataz->cabang == 7)
                Paseh
                @elseif($dataz->cabang == 8)
                Cimalaka
                @elseif($dataz->cabang == 9)
                Tomo
                @elseif($dataz->cabang == 10)
                Ujungjaya
                @elseif($dataz->cabang == 11)
                Wado
                @elseif($dataz->cabang == 12)
                Cisitu
                @elseif($dataz->cabang == 13)
                Pamulihan
                @elseif($dataz->cabang == 14)
                Cimanggung
                @elseif($dataz->cabang == 40)
                Mol Pelayanan Publik
                @else
                        Tidak ada 
                @endif
                
              </p>
              <p class="card-text"><span class="text-muted">Status : {{ $dataz->status == 1 ? 'Aktip' : 'non aktip' }}</span></p>
              <p class="card-text"><span class="text-muted">No Rekening{{ $dataz->no_rekening }}</span></p>
              <p class="card-text"><span class="text-muted">Nama Sekarang{{ $dataz->nama_sekarang }}</span></p>
              <p class="card-text"><span class="text-muted">Nama Pemilik{{ $dataz->nama_pemilik }}</span></p>
              <p class="card-text"><span class="text-muted">No Rumah{{ $dataz->no_rumah }}</span></p>
              <p class="card-text"><span class="text-muted">RT{{ $dataz->rt }}</span></p>
              <p class="card-text"><span class="text-muted">{{ $dataz->rw }}</span></p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              {{-- <p class="card-text"><span class="text-muted">Nama : {{ $dataz->blok }}</span></p> --}}
              <p class="card-text"><span class="text-muted">Dusun : {{ $dataz->dusun }}</span></p>
              <p class="card-text"><span class="text-muted">Kecamatan : {{ $dataz->kecamatan }}</span></p>
              <p class="card-text"><span class="text-muted">Status Milik : {{ $dataz->status_milik }}</span></p>
              <p class="card-text"><span class="text-muted">Jumlah Jiwa Tetap : {{ $dataz->jml_jiwa_tetap }}</span></p>
              <p class="card-text"><span class="text-muted">Jumlah Jiwa Tidak Tetap :{{ $dataz->jml_jiwa_tidak_tetap }}</span></p>
              <p class="card-text"><span class="text-muted">Tanggal Pasang : {{ $dataz->tanggal_pasang }}</span></p>
              <p class="card-text"><span class="text-muted">Segel : {{ $dataz->segel }}</span></p>
              <p class="card-text"><span class="text-muted">Ceck Valve : {{ $dataz->ceck_valve }}</span></p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <p class="card-text"><span class="text-muted">Sumber_lain : {{ $dataz->sumber_lain }}</span></p>
              <p class="card-text"><span class="text-muted">Jenis_usaha : {{ $dataz->jenisusaha }}</span></p>
              <p class="card-text"><span class="text-muted">Merek : {{ mrk($dataz->id_merek) }}</span></p>
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

   