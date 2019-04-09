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
          <h2>Pilih Layanan</h2>
          <div class="row">
            <div class="col-md-6">
              <form class="" action="{{route('analisabyid')}}" method="post">
                @csrf
                <select class="form-control" name="nama_layanan">
                  @foreach($antrian as $tampil)
                    <option value="{{$tampil->nama_layanan}}">{{$tampil->nama_layanan}}</option>
                  @endforeach
                </select>
                <br>
                <input type="submit" name="Cek" value="Cek Layanan" class="btn btn-success">
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>

</div>

@endsection
<!-- /page content -->
