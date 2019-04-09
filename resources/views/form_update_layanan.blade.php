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
              <form class="" action="{{route('update_layanan',$layanan->id_layanan)}}" method="post">
                @csrf
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <input value="{{$layanan->nama_layanan}}" name="nama_layanan" type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Nama Layanan" required>
                    <span class="fa fa-heartbeat form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input value="Update" name="save" type="submit" class="btn btn-warning" id="inputSuccess2">
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
@endsection
