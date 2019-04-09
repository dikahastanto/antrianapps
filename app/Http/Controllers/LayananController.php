<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form_input_layanan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $layanan = DB::table('tb_layanan')
                ->get();

      return view('tampil_layanan')->with(['layanan' => $layanan]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    $nama = $request->input('nama_layanan');
    $waktu = $request->input('waktu');

    $data = array('nama_layanan' =>$nama , 'waktu_menit' =>$waktu);
    DB::table('tb_layanan')->insert($data);

    if ($data) {
        echo "<script type=text/Javascript> alert( 'Data Berhasil Di Simpan !')
                window.location = '../public/form_input_layanan';
              </script>";
      }else {
        echo "<script type=text/Javascript> alert( 'Data Gagal Di Simpan !')
                window.location = '../public/form_input_layanan';
              </script>";
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $layanan=DB::table('tb_layanan')
                  ->where('id_layanan','=',$id)->first();

      return view('form_update_layanan')
                  -> with ([
                            'layanan' => $layanan
                        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $nama_layanan = $request->input('nama_layanan');

      DB::table('tb_layanan')
            ->where('id_layanan', $id)
            ->update(['nama_layanan' => $nama_layanan]);

                echo "<script type=text/Javascript> alert( 'Data Berhasil Di Ubah !')
                        window.location = '../tampil_layanan';
                      </script>";

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      DB::table('tb_layanan')->where('id_layanan', '=', $id)->delete();
      return redirect()->route('tampil_layanan');
    }
}
