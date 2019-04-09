@extends('layout.master')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
  <?php
    $total_menit = 0;
    $total_detik = 0;

              foreach ($rata_rata as $hitung) {
                $pecah = explode(" ",$hitung->lama_pelayanan);
                $total_menit += $pecah[0];
                $total_detik += $pecah[2];

              }
              if ($total_detik > 60) {

                $tampil_detik_jadi_menit = $total_detik/60;
                $pecah_detik = explode(".",$tampil_detik_jadi_menit);
                $tampil_detik_bahan = '0.'.$pecah_detik[0];
                $tampil_detik_fix = round($tampil_detik_bahan*60);

                $tampil_menit = $total_menit + $pecah_detik[0];
              }else {
                $tampil_menit = $total_menit;
                $tampil_detik_fix = $total_detik;
              }

    // echo $tampil_menit." Menit <br>";
    // echo $tampil_detik_fix . " Detik";

   ?>
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
          <h1>Analisa Waktu Antrian</h1>
          <table class="table table-hover table-striped">
            <tr>
              <td>Jenis Layanan</td>
              <td>Waktu Efisien Saat Ini</td>
              <td>Jumlah Yang Sudah Dilayani</td>
              <td>Total</td>
              <td>Rata-Rata (Menit)</td>
              <td>Aksi</td>
            </tr>
            <tr>
              <td>{{$antrian->nama_layanan}}</td>
              <td>{{$antrian->waktu_menit}}</td>
              <td>{{$jumlah_antrian}}</td>
              <td>{{$tampil_menit}} Menit {{$tampil_detik_fix}} Detik</td>
              <td><?php if($tampil_menit>0){echo $waktu = $tampil_menit/$jumlah_antrian;$tampil_menit/$jumlah_antrian;}else{echo "0";}  ?></td>
              <td>
                @if($tampil_menit<=0)
                <a href="#">
                  <button type="button" name="button" class="btn btn-success" disabled>Efisiensikan</button>
                </a>
                @else
                <a href="{{route('update_waktu_layanan',[$antrian->nama_layanan,$waktu])}}">
                  <button type="button" name="button" class="btn btn-success">Efisiensikan</button>
                </a>
                @endif
              </td>
            </tr>
          </table>

        </div>
      </div>
    </div>

  </div>

</div>

@endsection
<!-- /page content -->
