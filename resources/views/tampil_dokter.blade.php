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
          <h1>Data Dokter</h1>
          <table class="table table-hover table-striped">
            <tr>
              <td>NID</td>
              <td>Nama Lengkap</td>
              <td>Alamat</td>
              <td>Tanggal Jaga</td>
              <td>E-Mail</td>
              <td>No Telp</td>
              <td>Aksi</td>
            </tr>
            @foreach($dokter as $tampil_dokter)
            <tr>
              <td>{{$tampil_dokter->nid}}</td>
              <td>{{$tampil_dokter->nama}}</td>
              <td>{{$tampil_dokter->alamat}}</td>
              <td>{{$tampil_dokter->tgl_jaga}}</td>
              <td>{{$tampil_dokter->email}}</td>
              <td>{{$tampil_dokter->no_telp}}</td>
              <td>
                <a href="{{route('form_update_data_dokter',$tampil_dokter->nid)}}">
                  <button type="button" name="button" class="btn btn-success">Edit</button>
                </a>

                <a href="{{route('form_jadwal',$tampil_dokter->nid)}}">
                  <button type="button" name="button" class="btn btn-warning">Tambah/Ubah Jadwal</button>
                </a>

                <a href="{{route('delete_dokter',$tampil_dokter->nid)}}">
                  <button type="button" name="button" class="btn btn-danger" onClick='return konfirmasi()'>Hapus</button>
                </a>
              </td>
            </tr>
            @endforeach

          </table>
          <center>{{ $dokter->links() }}</center>
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
