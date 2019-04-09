@extends('layout.master')

@section('content')

<!-- page content -->
<div class="right_col" role="main">

  <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel tile" style="height:550px;">
        <div class="x_title">
          <h2>Data Layanan</h2>
          <!-- untuk menu di kanan panel
          <ul class="nav navbar-right panel_toolbox">
          </ul>
          -->
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <table class="table table-hover table-striped">
            <tr>
              <td>Id Layanan</td>
              <td>Nama Layanan</td>
              <td>Estimasi Waktu</td>
              <td>Aksi</td>
            </tr>
            @foreach($layanan as $tampil)
            <tr>
              <td>{{$tampil->id_layanan}}</td>
              <td>{{$tampil->nama_layanan}}</td>
              <td>{{$tampil->waktu_menit}}</td>
              <td>
                <a href="{{route('form_update_layanan',$tampil->id_layanan)}}">
                  <button type="button" name="button" class="btn btn-success">Edit Nama</button>
                </a>
                <a href="{{route('delete_layanan',$tampil->id_layanan)}}">
                   <button type="button" name="button" class="btn btn-danger" onClick='return konfirmasi()'>Hapus</button>
                </a>
              </td>
            </tr>
            @endforeach
          </table>
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
