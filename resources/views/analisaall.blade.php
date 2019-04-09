@extends('layout.master')

@section('content')
<?php

  $jumlah_pengunjung= $jp->jumlah_pengunjung;
  $jamkerja= ($waktu->jumlah_hari) * 420;
  
  //mu menit/orang
  $mu_menit_per_orang = $jamkerja/$jumlah_pengunjung;
  //mu orang/menit
  $mu_orang_per_menit = $jumlah_pengunjung/$jamkerja;

  //x kuadrat hitung
  $kai_kuadrat_hitung = ($mu_menit_per_orang - $mu_menit_per_orang) + ($mu_orang_per_menit + $mu_orang_per_menit);

  //x kuadrat tabel
  $kai_kuadrat_tabel =  $mu_orang_per_menit * ($mu_menit_per_orang + $mu_orang_per_menit);

  if ($kai_kuadrat_hitung < $kai_kuadrat_tabel) {
    $hasil= "Efisien";
  }else{
    $hasil= "Tidak efisien";
  }


?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel tile" style="height:550px;">
        <div class="x_title">
          <h2>Selamat Datang</h2>
          <!-- untuk menu di kanan panel
          <ul class="nav navbar-right panel_toolbox">
          </ul>
          -->
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <h2>Pilih Layanan</h2>
          <h1>Waktu Antrian <?= $hasil; ?></h1>
          <h4>Rincian</h4>
          <table class="table table-hover">
            <tr>
              <td>μ(menit/orang)</td>
              <td>μ(orang/menit)</td>
              <td>X<sup>2</sup>Hitung</td>
              <td>X<sup>2</sup>Tabel</td>
              <td>Keputusan</td>
            </tr>
            <tr>
              <td>{{$mu_menit_per_orang}}</td>
              <td>{{$mu_orang_per_menit}}</td>
              <td>{{$kai_kuadrat_hitung}}</td>
              <td>{{$kai_kuadrat_tabel}}</td>
              <td>{{$hasil}}</td>
            </tr>
          </table>
          Jumlah Pengunjung {{$jumlah_pengunjung}} <br>
          Jam Kerja{{$jamkerja}} <br>
          MU menit per orang {{$mu_menit_per_orang}} <br>
          Mu Orang per menit {{$mu_orang_per_menit}} <br>
        </div>
        <?php echo $waktu->jumlah_hari; ?>
      </div>
    </div>

  </div>

</div>
@endsection
