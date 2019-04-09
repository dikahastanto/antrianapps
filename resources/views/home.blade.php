@extends('layout.master')

@section('content')

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
          <h1>Jadwal Antrian Hari Ini</h1>
          <table class="table table-hover table-striped">
            <tr>
              <td>No Panggil</td>
              <td>Nama Lengkap</td>
              <td>Jenis Layanan</td>
              <td>Jam</td>
              <td>Status</td>
              <td>Aksi</td>
            </tr>
            @foreach($antrian as $tampil_antrian)
            <tr>
              <td>{{$tampil_antrian->no_panggil}}</td>
              <td>{{$tampil_antrian->nama_lengkap}}</td>
              <td>{{$tampil_antrian->jenis_layanan}}</td>
              <td>{{$tampil_antrian->jam}}</td>
              @if($tampil_antrian->status=='b')

                <td>Belum Di Layani</td>

              @elseif($tampil_antrian->status=='s')

                <td>Sedang Dilayani</td>

              @else

                <td>Sudah Dilayani</td>

              @endif
              <td>
                @if($no==1)
                <a href="{{route('layani',$tampil_antrian->id)}}">
                  <button type="button" name="layani"class="btn btn-primary">Layani</button>
                </a>
                @else
                <a href="{{route('layani',$tampil_antrian->id)}}">
                  <button type="button" name="layani"class="btn btn-primary" disabled>Layani</button>
                </a>
                @endif
                <a href="{{route('cancle',$tampil_antrian->id)}}">
                  <button type="button" name="layani"class="btn btn-danger" onClick='return konfirmasi()'>Cancle</button>
                </a>
              </td>
            </tr>
            <?php $no++; ?>
            @endforeach
          </table>
          <center>{{ $antrian->links() }}</center>
        </div>
      </div>
    </div>

  </div>

</div>
<script type="text/javascript" language="javascript">
	function konfirmasi () {
		var pilihan = confirm ("Apakah Anda Yakin Membatalkan Antrian, Hal Ini Dapat Merubah Waktu Prediksi?");
		if(pilihan){
			return true
			}else{
			alert ("Proses Di Batalkan")
			return false
			}
	}
</script>
@endsection
<!-- /page content -->
