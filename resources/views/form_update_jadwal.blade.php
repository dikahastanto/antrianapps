@extends('layout.master')

@section('content')
<!-- page content -->
<div class="right_col" role="main">

  <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel tile" style="height:550px;">
        <div class="x_title">
          <h2>Input Data Dokter</h2>
          <!-- untuk menu di kanan panel
          <ul class="nav navbar-right panel_toolbox">
          </ul>
          -->
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br>

          <div class="row">
            <h1>Form Input</h1>
            <br>
            <div class="col-lg-6">
              <form class="" action="{{route('update_jadwal',$dokter->nid)}}" method="post" enctype="multipart/form-data">
                @csrf
                <h2>Jadwal Saat Ini

                @if($dokter->tgl_jaga==null)
                  Belum Ada
                @else
                  {{$dokter->tgl_jaga}}
                @endif
                </h2>
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <input readonly name="date" type="text" class="form-control has-feedback-left" id="single_cal1" placeholder="Tanggal" aria-describedby="inputSuccess2Status">
                    <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input name="save" type="submit" class="btn btn-warning" id="inputSuccess2">
                  </div>
                </div>

              </form>
            </div>

          </div>

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
