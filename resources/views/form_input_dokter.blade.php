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
              <form class="" action="{{route('simpandokter')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <input name="nid" type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Nomor Induk Dokter" required>
                    <span class="fa fa-ticket form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <input name="nama" type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Nama Dokter" required>
                    <span class="fa fa-user-md form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <input name="alamat" placeholder="Alamat" type="text" class="form-control has-feedback-left" id="inputSuccess2" required>
                    <span class="fa fa-location-arrow form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <input name="email" placeholder="E-mail" type="email" class="form-control has-feedback-left" id="inputSuccess2" required>
                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <input name="no_telp" placeholder="No Telephone" type="number" class="form-control has-feedback-left" id="inputSuccess2" required>
                    <span class="fa fa-volume-control-phone form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <input name="gambar" type="file" class="form-control has-feedback-left" required>
                    <span class="fa fa-file-image-o form-control-feedback left" aria-hidden="true"></span>
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
@endsection
