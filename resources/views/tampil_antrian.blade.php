@extends('layout.master')

@section('content')

<!-- page content -->
<div class="right_col" role="main">

  <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel tile" style="height:590px;">
        <div class="x_title">
          <h2>Selamat Datang</h2>
          <!-- untuk menu di kanan panel
          <ul class="nav navbar-right panel_toolbox">
          </ul>
          -->
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <h1>Jadwal {{$tittle}}</h1>
          <div class="row">
            <form class="" action="{{route('tampil_by_date')}}" method="post">
                @csrf
              <div class="col-md-4">
                <fieldset>
                  <div class="control-group">
                    <div class="controls">
                      <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                        <input readonly name="date" type="text" class="form-control has-feedback-left" id="single_cal1" placeholder="Tanggal" aria-describedby="inputSuccess2Status">
                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                        <span id="inputSuccess2Status" class="sr-only">(success)</span>
                      </div>
                    </div>
                  </div>
                </fieldset>
              </div>
              <div class="col-md-4">
                <input type="submit" name="Tampil" value="Tampilkan" class="btn btn-warning">
              </div>
            </form>
          </div>
          <table class="table table-hover table-striped">
            <tr>
              <td>No Panggil</td>
              <td>Nama Lengkap</td>
              <td>Jenis Layanan</td>
              <td>Tanggal</td>
              <td>Jam</td>
              <td>Status</td>
              <td>Aksi</td>
            </tr>
            @foreach($antrian as $tampil_antrian)
            <tr>
              <td>{{$tampil_antrian->no_panggil}}</td>
              <td>{{$tampil_antrian->nama_lengkap}}</td>
              <td>{{$tampil_antrian->jenis_layanan}}</td>
              <td>{{$tampil_antrian->date}}</td>
              <td>{{$tampil_antrian->jam}}</td>
              @if($tampil_antrian->status=='b')

                <td>Belum Di Layani</td>

              @elseif($tampil_antrian->status=='s')

                <td>Sedang Dilayani</td>

              @else

                <td>Sudah Dilayani</td>

              @endif
              <td>
                @if($tampil_antrian->status=='c')
                <a href="{{route('cancle',$tampil_antrian->id)}}">
                  <button disabled type="button" name="layani"class="btn btn-danger" onClick='return konfirmasi()'>Cancle</button>
                </a>
                @else
                <a href="{{route('cancle',$tampil_antrian->id)}}">
                  <button type="button" name="layani"class="btn btn-danger" onClick='return konfirmasi()'>Cancle</button>
                </a>
                @endif
              </td>
            </tr>
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
<script>
    $('#myDatepicker').datetimepicker();

    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });

    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });

    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();

    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });

    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });

    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>
@endsection
<!-- /page content -->
