<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

      $cur_date = date('Y-m-d');

      $antrian=DB::table('tb_antrian')
              ->select('id','no_panggil','nama_lengkap','jenis_layanan','status')
              ->selectRaw('time(jam) as jam')
              ->where('jam','LIKE',$cur_date.'%')
              ->where('status','=','b')
              ->paginate(4);

      return view('home') -> with ([
        'antrian' => $antrian,
        'no' => 1
      ]);
      $no = $batas * ($antrian->currentpage() - 1);

    }

    public function layani($id){

      $antrian=DB::table('tb_antrian')
                  ->select('id','no_panggil','nama_lengkap','jenis_layanan','status')
                  ->selectRaw('time(jam) as jam')
                  ->where('id',$id)
                  ->first();

      return view('layani')->with(['antrian'=>$antrian]);

    }

    public function selesai(Request $req,$id){

      $lama_layanan = $req->input('waktu');

      DB::table('tb_antrian')
            ->where('id', $id)
            ->update(['lama_pelayanan' => $lama_layanan,'status' => 'c']);

      return redirect()->route('home');

    }

    public function cancle($id){

      $lama_layanan = DB::table('tb_layanan')->select('waktu_menit')
                      ->selectRaw('date(jam) as jam')
                      ->join('tb_antrian', 'tb_layanan.nama_layanan', '=', 'tb_antrian.jenis_layanan')
                      ->where('id','=',$id)->first();

      $waktu = $lama_layanan->waktu_menit;
      $tgl = $lama_layanan->jam;

      // DB::table('tb_antrian')->raw('UPDATE tb_antrian SET jam = DATE_ADD(TIME(jam), INTERVAL -$waktu MINUTE) WHERE id > $id AND date(jam) = $tgl');
      DB::table('tb_antrian')
          ->whereRaw('id > '.$id)
          ->update(['jam' => DB::raw('DATE_ADD(TIME(jam),INTERVAL -'.$waktu.' MINUTE)')]);

      DB::table('tb_antrian')->where('id', '=', $id)->delete();

      return redirect()->route('home');
    }

    public function tampil_antrian(){

      $tittle = "Semua Antrian";
      $antrian=DB::table('tb_antrian')
              ->select('id','no_panggil','nama_lengkap','jenis_layanan','status')
              ->selectRaw('time(jam) as jam')
              ->selectRaw('date(jam) as date')
              ->paginate(5);


      return view('tampil_antrian') -> with ([
        'antrian' => $antrian,
        'tittle' => $tittle
      ]);
      $no = $batas * ($antrian->currentpage() - 1);
    }

    public function tampil_by_date(Request $request){

      $bahan_date = $request->input('date');
      $date = date('Y-m-d',strtotime($bahan_date));

      $antrian=DB::table('tb_antrian')
              ->select('id','no_panggil','nama_lengkap','jenis_layanan','status')
              ->selectRaw('time(jam) as jam')
              ->selectRaw('date(jam) as date')
              ->where('jam','LIKE',$date.'%')
              ->paginate(10);
      $tittle = 'Antrian ' . date('d F Y', strtotime($date));
      return view('tampil_antrian') -> with ([
        'antrian' => $antrian,
        'tittle' => $tittle
      ]);
      $no = $batas * ($antrian->currentpage() - 1);
    }
}
