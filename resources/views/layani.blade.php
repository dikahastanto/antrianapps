@extends('layout.master')

@section('content')

<!-- page content -->
<div class="right_col" role="main">

  <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel tile" style="height:550px;">
        <div class="x_title">
          <h2>Sedang Di Layani</h2>
          <!-- untuk menu di kanan panel
          <ul class="nav navbar-right panel_toolbox">
          </ul>
          -->
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br>

          <div class="row">

            <div class="col-md-3">
              <img src="{{url('img/download.png')}}" width="200">
            </div>
            <div class="col-md-6">
              <h1>{{$antrian->no_panggil}}</h1>
              <h3>{{$antrian->jam}}</h3>
              <h3>{{$antrian->nama_lengkap}}</h3>
              <h3>Sedang Dilayani</h3>
              <h1 id="timer_view">0 Menit 0 Detik</h1>

              <form class="" action="{{route('selesai',$antrian->id)}}" method="post">
                @csrf
                <input type="text" name="waktu" value="" id="timer_form" hidden>
                  <button id="button_start" type="submit" name="button" class="btn btn-success">Selesai</button>
              </form>


            </div>

          </div>

          <br>

          <div class="row">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

        </div>
      </div>
    </div>

  </div>

</div>
<script type="text/javascript">
  var time_count = 0;
  var timer = null;
  window.onload = function(){
    button_start.oncltimer = setInterval(update_timer, 1000);
  };

  function update_timer(){
    var seconds = time_count;
    var minutes = Math.floor(seconds / 60);
    seconds = seconds % 60;
    minutes = minutes % 60;

    timer_view.innerHTML = minutes+" Menit "+seconds + " Detik ";
    $('#timer_form').val(minutes+" Menit "+seconds + " Detik ");
    time_count++;

  }

</script>
@endsection
<!-- /page content -->
