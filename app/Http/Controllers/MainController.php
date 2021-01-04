<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Database;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    function __construct()
    {
        $this->db = new Database();
    }

    public function index(Request $request)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        return view("index",["user_data"=>$user_data]);
    }

    public function berita(Request $request)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        $berita = DB::select("select * from berita");
        return view("berita",["user_data"=>$user_data,"berita"=>$berita]);
    }

    public function tentang_kami(Request $request)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        return view("tentang_kami",["user_data"=>$user_data]);
    }

    public function penggalangan_dana(Request $request)
    {
        $penggalangan_dana = DB::select("select * from penggalangan_dana");
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        return view("penggalangan_dana",["user_data"=>$user_data,"penggalangan_dana"=>$penggalangan_dana]);
    }

    public function donasi(Request $request)
    {
        $daftar_donasi = DB::select('select * from daftar_donasi');
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        return view("donasi",["user_data"=>$user_data,"daftar_donasi"=>$daftar_donasi]);
    }

    public function zakat(Request $request)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        return view("zakat",["user_data"=>$user_data]);
    }

    public function qurban(Request $request)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        return view("qurban",["user_data"=>$user_data]);
    }

    public function beli_qurban(Request $request, $id_qurban)
    {
        $data_qurban = $this->db->get_hewan_qurban_data($id_qurban);
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        return view("beli_qurban",["user_data"=>$user_data,"data_qurban"=>$data_qurban]);
    }

    public function login()
    {
        return view("login");
    }

    public function register()
    {
        return view("register");
    }

    public function logout(Request $request)
    {
        $request->session()->forget("username");
        $request->session()->forget("password");
        return redirect("/login");
    }
    
    public function profil(Request $request, $halaman)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        
        $bukti_qurban_belum = $this->db->get_buktipem_qurban_belum($user_data[0]->id);
        $bukti_pembayaran = DB::select('select * from bukti_pembayaran_qurban');
        $bukti_pembayaran_sudah_qurban = DB::select('select * from qurban where bukti_pembayaran = ?',["sudah"]);
        $history_pembayaran = DB::select("select * from pembayaran");
        $history_pembayaran_user = DB::select("select * from pembayaran where id_user = ?",[$user_data[0]->id]);
        $daftar_donasi = DB::select("select * from daftar_donasi");
        $donasi_bukti_belum = DB::select("select * from donasi where id_user = ? and status = 'belum'",[$user_data[0]->id]);
        $bukti_pembayaran_donasi = DB::select("select * from bukti_pembayaran_donasi");
        $bukti_pembayaran_sudah_donasi = DB::select("select * from donasi where status = 'sudah'");
        $penggalangan_dana_user_belum = DB::select("select * from penggalangan_dana_pembayaran where id_user = ? and status = 'belum'", [$user_data[0]->id]);
        $bukti_pembayaran_penggalangan_dana = DB::select("select * from bukti_pembayaran_penggalangan_dana");
        $penggalangan_dana_user = DB::select("select * from penggalangan_dana where id_pembuat = ?",[$user_data[0]->id]);
        $zakat_user_belum = DB::select("select * from zakat where id_user = ? and status = 'belum'",[$user_data[0]->id]);
        $bukti_pembayaran_zakat = DB::select("select * from bukti_pembayaran_zakat");

        $pembayaran_user_qurban = DB::select("select * from pembayaran where id_user = ? and jenis_bayar = ?", [$user_data[0]->id, "qurban"]);
        $pembayaran_user_donasi = DB::select("select * from pembayaran where id_user = ? and jenis_bayar = ?", [$user_data[0]->id, "donasi"]);
        $pembayaran_user_penggalangan_dana = DB::select("select * from pembayaran where id_user = ? and jenis_bayar = ?", [$user_data[0]->id, "penggalangan_dana"]);
        $pembayaran_user_zakat = DB::select("select * from pembayaran where id_user = ? and jenis_bayar = ?", [$user_data[0]->id, "zakat"]);
        
        $pembayaran_qurban = DB::select("select * from pembayaran where jenis_bayar = ?", [ "qurban"]);
        $pembayaran_donasi = DB::select("select * from pembayaran where jenis_bayar = ?", ["donasi"]);
        $pembayaran_penggalangan_dana = DB::select("select * from pembayaran where jenis_bayar = ?", ["penggalangan_dana"]);
        $pembayaran_zakat = DB::select("select * from pembayaran where jenis_bayar = ?", ["zakat"]);
        
        $penggalangan_dana_selesai = DB::select("select * from penggalangan_dana where dana_terkumpul >= dana_max");
        $penggalangan_dana_post = DB::select("select * from penggalangan_dana_post");
        $donasi_post = DB::select("select * from donasi_post");

        $donasi_selesai = DB::select("select * from daftar_donasi where dana_terkumpul >= dana_max");
        return view("profil",
        [
            "user_data"=>$user_data,
            "hal"=>$halaman,

            "donasi_selesai"=>$donasi_selesai,
            "penggalangan_dana_selesai"=>$penggalangan_dana_selesai,
            "penggalangan_dana_post"=>$penggalangan_dana_post,
            "donasi_post"=>$donasi_post,

            "pembayaran_qurban"=>$pembayaran_qurban,
            "pembayaran_donasi"=>$pembayaran_donasi,
            "pembayaran_penggalangan_dana"=>$pembayaran_penggalangan_dana,
            "pembayaran_zakat"=>$pembayaran_zakat,

            "pembayaran_user_qurban"=>$pembayaran_user_qurban,
            "pembayaran_user_donasi"=>$pembayaran_user_donasi,
            "pembayaran_user_penggalangan_dana"=>$pembayaran_user_penggalangan_dana,
            "pembayaran_user_zakat"=>$pembayaran_user_zakat,

            "bukti_pembayaran_zakat"=>$bukti_pembayaran_zakat,
            "zakat_user_belum"=>$zakat_user_belum,
            "penggalangan_dana_user"=>$penggalangan_dana_user,
            "bukti_pembayaran_penggalangan_dana"=>$bukti_pembayaran_penggalangan_dana,
            "penggalangan_dana_user_belum"=>$penggalangan_dana_user_belum,
            "daftar_donasi"=>$daftar_donasi,
            "donasi_bukti_belum"=>$donasi_bukti_belum,
            "bukti_pembayaran_donasi"=>$bukti_pembayaran_donasi,
            "bukti_pembayaran_sudah_donasi"=>$bukti_pembayaran_sudah_donasi,
            "history_pembayaran_user"=>$history_pembayaran_user,
            "history_pembayaran"=>$history_pembayaran,
            "bukti_qurban_belum"=>$bukti_qurban_belum,
            "bukti_pembayaran"=>$bukti_pembayaran,
            "bukti_pembayaran_sudah_qurban"=>$bukti_pembayaran_sudah_qurban
        ]);
    }

    public function batal_bukti_qurban(Request $request, $id_qurban)
    {
        DB::delete("delete from qurban where id = ?", [$id_qurban]);
        return redirect("/profil/kirim_bukti_pembayaran");
    }

    public function batal_bukti_donasi(Request $request, $id_donasi)
    {
        DB::delete("delete from donasi where id = ?", [$id_donasi]);
        return redirect("/profil/kirim_bukti_pembayaran");
    }

    public function batal_bukti_penggalangan_dana(Request $request, $id_penggalangan_dana)
    {
        DB::delete("delete from penggalangan_dana_pembayaran where id = ?", [$id_penggalangan_dana]);
        return redirect("/profil/kirim_bukti_pembayaran");
    }

    public function batal_bukti_zakat(Request $request, $id_zakat)
    {
        DB::delete("delete from zakat where id = ?", [$id_zakat]);
        return redirect("/profil/kirim_bukti_pembayaran");
    }

    public function invoice(Request $request)
    {
        $norek = $request->input("norek");
        $noinv = $request->input("no");
        $metode= $request->input("metode");
        $namarek=$request->input("namarek");
        $total = $request->input("total");
        $date = $request->input("date");
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        
        return view("invoice",["user_data"=>$user_data,"date"=>$date,"norek"=>$norek,"noinv"=>$noinv,"metode"=>$metode,"namarek"=>$namarek,"total"=>$total]);
    }

    public function kirimbukpem(Request $request, $id_qurban)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        return view("kirim_bukti_pembayaran",["user_data"=>$user_data,"id_qurban"=>$id_qurban]);
    }

    public function kirimbukpem_donasi(Request $request, $id_donasi)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        return view("kirim_bukti_pembayaran_donasi",["user_data"=>$user_data,"id_donasi"=>$id_donasi]);
    }

    public function kirimbukpem_penggalangan_dana(Request $request, $id_penggalangan_dana)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        return view("kirim_bukti_pembayaran_penggalangan_dana",["user_data"=>$user_data,"id_penggalangan_dana"=>$id_penggalangan_dana]);
    }

    public function kirimbukpem_zakat(Request $request, $id_zakat)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        return view("kirim_bukti_pembayaran_zakat",["user_data"=>$user_data,"id_zakat"=>$id_zakat]);
    }

    public function tolak_pembayaran(Request $request, $id_buktipem,$id_qurban)
    {
        DB::delete('delete from bukti_pembayaran_qurban where id = ?', [$id_buktipem]);
        DB::update('update qurban set bukti_pembayaran_qurban = "belum" where id = ?', [$id_qurban]);
        return redirect("/profil/bukti_pembayaran_klien");
    }

    public function tolak_pembayaran_donasi(Request $request, $id_buktipem,$id_donasi)
    {
        DB::delete('delete from bukti_pembayaran_donasi where id = ?', [$id_buktipem]);
        DB::update('update donasi set status = "belum" where id = ?', [$id_donasi]);
        return redirect("/profil/bukti_pembayaran_klien");
    }

    public function tolak_pembayaran_penggalangan_dana(Request $request, $id_buktipem,$id_penggalangan_dana)
    {
        DB::delete('delete from bukti_pembayaran_penggalangan_dana where id = ?', [$id_buktipem]);
        DB::update('update penggalangan_dana_pembayaran set status = "belum" where id = ?', [$id_penggalangan_dana]);
        return redirect("/profil/bukti_pembayaran_klien");
    }

    public function tolak_pembayaran_zakat(Request $request, $id_buktipem,$id_zakat)
    {
        DB::delete('delete from bukti_pembayaran_zakat where id = ?', [$id_buktipem]);
        DB::update('update zakat set status = "belum" where id = ?', [$id_zakat]);
        return redirect("/profil/bukti_pembayaran_klien");
    }

    public function terima_pembayaran_tambah_catatan(Request $request,$uniq)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        return view("profil.pembayaran_tambahcatatan",["user_data"=>$user_data,"uniq"=>$uniq]);
    }

    public function terima_pembayaran(Request $request, $id_buktipem,$id_qurban)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        date_default_timezone_set('Asia/Jakarta');
        $data = DB::select("select * from qurban where id = ?", [$id_qurban]);
        $uniq = rand(10,100000000);
        $date = strval(date("Y-m-d H:i:s"));
        DB::delete('delete from bukti_pembayaran_qurban where id = ?', [$id_buktipem]);
        DB::update('update qurban set bukti_pembayaran = "diterima" where id = ?', [$id_qurban]);
        DB::insert('insert into pembayaran (metode,total, tanggal,catatan,namapengirim,namapenerima,uniq,id_user,jenis_bayar) 
        values (?, ?, ?, ?, ?, ?, ?, ?, "qurban")', ["Transfer Bank Mandiri",$data[0]->total,$date,"",$data[0]->namapengqurban,$data[0]->daerahdistribusi,$uniq,$data[0]->id_user]);
        return redirect("/profil/pembayaran_tambahcatatan/$uniq");
    }

    public function terima_pembayaran_donasi(Request $request, $id_buktipem,$id_donasi)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        date_default_timezone_set('Asia/Jakarta');
        $data = DB::select("select * from donasi where id = ?", [$id_donasi]);
        $uniq = rand(10,100000000);
        $date = strval(date("Y-m-d H:i:s"));
        DB::delete('delete from bukti_pembayaran_donasi where id = ?', [$id_buktipem]);
        DB::update('update donasi set status = "diterima" where id = ?', [$id_donasi]);
        DB::insert('insert into pembayaran (metode,total, tanggal,catatan,namapengirim,namapenerima,uniq,id_user,jenis_bayar) 
        values (?, ?, ?, ?, ?, ?, ?, ?, "donasi")', ["Transfer Bank Mandiri",$data[0]->total_donasi,$date,"",$data[0]->nama_donatur,$data[0]->nama_penerima,$uniq,$data[0]->id_user]);
        
        DB::update("update daftar_donasi set dana_terkumpul = dana_terkumpul + ? where id = ?",[$data[0]->total_donasi,$data[0]->id_donasi]);
        return redirect("/profil/pembayaran_tambahcatatan/$uniq");
    }

    public function terima_pembayaran_penggalangan_dana(Request $request, $id_buktipem,$id_penggalangan_dana)
    {
        $data = DB::select("select * from penggalangan_dana_pembayaran where id = ?", [$id_penggalangan_dana]);
        $pengirim = DB::select("select * from user where id = ?", [$data[0]->id_user]);
        $penggalangan_dana = DB::select("select * from penggalangan_dana where id = ?", [$data[0]->id_penggalangan_dana]);
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        date_default_timezone_set('Asia/Jakarta');
        $uniq = rand(10,100000000); 
        $date = strval(date("Y-m-d H:i:s"));
        $nama_donatur = $penggalangan_dana[0]->nama_donatur;
        $jumlah_donatur = $penggalangan_dana[0]->jumlah_donatur;
        if (strpos($nama_donatur, $pengirim[0]->username) !== false) {
            
        }else{
            $jumlah_donatur += 1;
            $nama_donatur = $nama_donatur.$pengirim[0]->username.",";
        }
        DB::delete('delete from bukti_pembayaran_penggalangan_dana where id = ?', [$id_buktipem]);
        DB::update("update penggalangan_dana set dana_terkumpul = dana_terkumpul + ?, jumlah_donatur = ?, nama_donatur = ? where id = ?",[$data[0]->total,$jumlah_donatur,$nama_donatur,$data[0]->id_penggalangan_dana]);
        DB::update('update penggalangan_dana_pembayaran set status = "diterima" where id = ?', [$id_penggalangan_dana]);
        DB::insert('insert into pembayaran (metode,total, tanggal,catatan,namapengirim,namapenerima,uniq,id_user,jenis_bayar) 
        values (?, ?, ?, ?, ?, ?, ?, ?,"penggalangan_dana")', ["Transfer Bank Mandiri",$data[0]->total,$date,"",$pengirim[0]->username,$penggalangan_dana[0]->nama_pembuat,$uniq,$data[0]->id_user]);
        return redirect("/profil/pembayaran_tambahcatatan/$uniq");
    }

    public function terima_pembayaran_zakat(Request $request, $id_buktipem,$id_zakat)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        date_default_timezone_set('Asia/Jakarta');
        $data = DB::select("select * from zakat where id = ?", [$id_zakat]);
        $uniq = rand(10,100000000);
        $date = strval(date("Y-m-d H:i:s"));
        DB::delete('delete from bukti_pembayaran_zakat where id = ?', [$id_buktipem]);
        DB::update('update zakat set status = "diterima" where id = ?', [$id_zakat]);
        DB::insert('insert into pembayaran (metode,total, tanggal,catatan,namapengirim,namapenerima,uniq,id_user,jenis_bayar) 
        values (?, ?, ?, ?, ?, ?, ?, ?, "zakat")', ["Transfer Bank Mandiri",$data[0]->total,$date,"",$data[0]->nama_muzakki,"admin",$uniq,$data[0]->id_user]);
        return redirect("/profil/pembayaran_tambahcatatan/$uniq");
    }

    public function form_penggalangan_dana(Request $request)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        return view("form_penggalangan_dana",["user_data"=>$user_data]);
    }

    public function form_donasi(Request $request)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        return view("form_donasi",["user_data"=>$user_data]);
    }

    public function detail_donasi(Request $request, $id_donasi)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        $daftar_donasi = DB::select('select * from daftar_donasi where id = ?', [$id_donasi]);
        return view("detail_donasi",["daftar_donasi"=>$daftar_donasi[0],"user_data"=>$user_data]);
    }

    public function detail_penggalangan_dana(Request $request,$id_penggalangan_dana)
    {
        $penggalangan_dana = DB::select("select * from penggalangan_dana where id = ?",[$id_penggalangan_dana]);
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        return view("detail_penggalangan_dana",["user_data"=>$user_data,"penggalangan_dana"=>$penggalangan_dana[0]]);
    }

    public function hapus_penggalangan_dana(Request $request, $id_penggalangan_dana)
    {
        DB::delete("delete from penggalangan_dana where id = ?",[$id_penggalangan_dana]);
        return redirect("/profil/penggalangan_dana");
    }

    public function hapus_donasi(Request $request, $id_donasi)
    {
        DB::delete("delete from daftar_donasi where id = ?",[$id_donasi]);
        return redirect("/profil/donasi");
    }

    public function edit_penggalangan_dana(Request $request, $id_penggalangan_dana)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        $penggalangan_dana = DB::select("select * from penggalangan_dana where id = ?",[$id_penggalangan_dana]);
        return view("form_edit_penggalangan_dana",["user_data"=>$user_data,"penggalangan_dana"=>$penggalangan_dana]);
    }

    public function edit_donasi(Request $request, $id_donasi)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        $donasi = DB::select("select * from daftar_donasi where id = ?",[$id_donasi]);
        return view("form_edit_donasi",["user_data"=>$user_data,"donasi"=>$donasi]);
    }

    public function form_zakat(Request $request, $jenis_zakat)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        return view("form_zakat",["user_data"=>$user_data,"jenis_zakat"=>$jenis_zakat]);
    }

    public function zakat_kalkulator(Request $request)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        return view("zakat_kalkulator",["user_data"=>$user_data]);
    }

    public function penggalangan_dana_form_post(Request $request, $id)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        $penggalangan_dana = DB::select("select * from penggalangan_dana where id = ?",[$id]);
        return view("penggalangan_dana_post",["user_data"=>$user_data,"penggalangan_dana"=>$penggalangan_dana[0]]);
    }

    public function donasi_form_post(Request $request,$id)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        $daftar_donasi = DB::select("select * from daftar_donasi where id = ?",[$id]);
        return view("donasi_post",["user_data"=>$user_data,"daftar_donasi"=>$daftar_donasi[0]]);  
    }

    public function detail_berita(Request $request,$id)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        $berita = DB::select("select * from berita where id = ?",[$id]);
        return view("detail_berita",["user_data"=>$user_data,"berita"=>$berita[0]]);  
    }
}
