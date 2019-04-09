<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AnalisaController extends Controller
{
    public function index()
    {

      $antrian=DB::table('tb_layanan')->get();
      return view('index_analisa') -> with ([
        'antrian' => $antrian
      ]);

    }

  public function analisaLayananById(Request $req)
  {

    $nama_layanan = $req->input('nama_layanan');
    $antrian=DB::table('tb_layanan')
            ->where('nama_layanan','=',$nama_layanan)
            ->first();

    $jumlah_antrian=DB::table('tb_antrian')
              ->where('status','=','c')
              ->where('jenis_layanan','=',$nama_layanan)
              ->count();

    $rata_rata = DB::table('tb_antrian')
              ->select('lama_pelayanan')
              ->where('status','=','c')
              ->where('jenis_layanan','=',$nama_layanan)
              ->get();


    return view('index_analisa_by_layanan') -> with ([
      'antrian' => $antrian,
      'jumlah_antrian' => $jumlah_antrian,
      'rata_rata' => $rata_rata
    ]);
  }

  public function updateWaktuLayanan($nama_layanan,$waktu)
  {

    DB::table('tb_layanan')
          ->where('nama_layanan', '=',$nama_layanan)
          ->update(['waktu_menit' => $waktu]);

    return redirect()->route('tampil_layanan');
  }

  public function analisall()
  {

    $waktu = DB::table('tb_antrian')
              ->selectRaw("COUNT(DISTINCT(date(jam))) AS 'jumlah_hari'")
              ->where('status','=','c')->first();

    $jp = DB::table('tb_antrian')
            ->selectRaw("COUNT(date(jam)) AS 'jumlah_pengunjung'")
            ->where('status','=','c')->first();


    // var_dump($waktu);
    return view('analisaall')->with([
      'waktu' => $waktu,
      'jp' => $jp
    ]);
  }

}
