<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DokterController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form_input_dokter');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $dokter=DB::table('tb_dokter')
              ->paginate(10);


      return view('tampil_dokter') -> with ([
        'dokter' => $dokter
      ]);
      $no = $batas * ($antrian->currentpage() - 1);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if($request->hasFile('gambar')){

      $temp = explode(".", $_FILES["gambar"]["name"]);
      $nama_baru = round(microtime(true)) . '.' . end($temp);

      $folder_cover = "../public/img/";
      $asal = $_FILES['gambar']['tmp_name'];
      $foto = $folder_cover. basename($nama_baru);
      $prosesupload = move_uploaded_file($_FILES['gambar']['tmp_name'], $foto);

      $image = $nama_baru;

    }else {
      $image = "default.png";
    }

    $nid = $request->input('nid');
    $nama = $request->input('nama');
    $alamat = $request->input('alamat');
    $email = $request->input('email');
    $no_telp = $request->input('no_telp');

    $data = array('nid' =>$nid , 'nama' =>$nama, 'alamat' => $alamat,'email' => $email, 'no_telp' => $no_telp,'gambar' => $image);
    DB::table('tb_dokter')->insert($data);

    if ($data) {
        echo "<script type=text/Javascript> alert( 'Data Berhasil Di Simpan !')
                window.location = '../public/form_input_dokter';
              </script>";
      }else {
        echo "<script type=text/Javascript> alert( 'Data Gagal Di Simpan !')
                window.location = '../public/form_input_dokter';
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $dokter=DB::table('tb_dokter')
                  ->where('nid','=',$id)->first();


      return view('form_update_dokter') -> with ([
        'dokter' => $dokter
      ]);
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
      $nama_dokter = $request->input('nama');
      $alamat = $request->input('alamat');
      $email = $request->input('email');
      $no_telp = $request->input('no_telp');
      $nid = $request->input('nid');
      if($request->hasFile('gambar')){
        $cover_lama = $request->input('gambar');


      $temp = explode(".", $_FILES["gambar"]["name"]);
      $nama_baru = round(microtime(true)) . '.' . end($temp);

      $folder_cover = "../public/img/";
      $asal = $_FILES['gambar']['tmp_name'];
      $foto = $folder_cover. basename($nama_baru);
      $prosesupload = move_uploaded_file($_FILES['gambar']['tmp_name'], $foto);
      unlink("../public/img/".$cover_lama);
      $image = $nama_baru;
      // $dokter = DB::table('tb_dokter')->where('nid',$id)->first();
      $dokter= array('nama' => $nama_dokter,'alamat' => $alamat,'email' => $email,'no_telp' => $no_telp,'gambar' => $image);

      DB::table('tb_dokter')->where('nid',$nid)->update($dokter);

      if ($dokter) {
          echo "<script type=text/Javascript> alert( 'Data Berhasil Di Simpan !')
                  window.location = '../tampil_dokter';
                </script>";
        }else {
          echo "<script type=text/Javascript> alert( 'Data Gagal Di Simpan !')
                  window.location = '../tampil_dokter';
                </script>";
        }


    }else {
      $dokter= array('nama' => $nama_dokter,'alamat' => $alamat,'email' => $email,'no_telp' => $no_telp);

      DB::table('tb_dokter')->where('nid',$nid)->update($dokter);

      if ($dokter) {
          echo "<script type=text/Javascript> alert( 'Data Berhasil Di Simpan !')
                  window.location = '../tampil_dokter';
                </script>";
        }else {
          echo "<script type=text/Javascript> alert( 'Data Gagal Di Simpan !')
                  window.location = '../tampil_dokter';
                </script>";
        }
    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_dokter')->where('nid', '=', $id)->delete();
        return redirect()->route('tampil_dokter');
    }

    public function form_jadwal($id)
    {
      $dokter=DB::table('tb_dokter')
                  ->where('nid','=',$id)->first();


      return view('form_update_jadwal') -> with ([
        'dokter' => $dokter
      ]);
    }

    public function update_jadwal(Request $request, $id)
    {
      $tgl_bahan =$request->input('date');
      $date = date('Y-m-d',strtotime($tgl_bahan));
      $exe = DB::table('tb_dokter')
            ->where('nid', $id)
            ->update(['tgl_jaga' => $date]);
            if (!$exe) {
                echo "<script type=text/Javascript> alert( 'Data Berhasil Di Simpan !')
                        window.location = '../tampil_dokter';
                      </script>";
              }else {
                echo "<script type=text/Javascript> alert( 'Data Gagal Di Simpan !')
                        window.location = '../tampil_dokter';
                      </script>";
              }
    }

}
