<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Database;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    function __construct()
    {
        $this->db = new Database();
    }

    public function auth_register(Request $request)
    {
        $r = $this->db->register_user(
            $request->input("email"),
            $request->input("username"),
            $request->input("password"),
            $request->input("nohp")
        );

        if ($r == -1)
        {
            return redirect("/register?msg=Username sudah dipakai!&type=error");
        }
        return redirect("/register?msg=Berhasil register, silahkan login&type=success");
    }

    public function auth_login(Request $request)
    {
        $r = $this->db->login_user(
            $request->input("username"),
            $request->input("password")
        );

        if ($r == -1)
        {
            return redirect("/login?msg=Username atau password salah!&type=error");
        }
        session([
            'username' => $request->input("username"),
            'password' => $request->input("password")
            ]);
        return redirect("/");
    }

    public function beli_qurban(Request $request)
    {
        $namapengqurban = array();
        for ($i=0;$i<intval($request->input("nama_pengqurban_count")+1);$i++)
        {
            array_push($namapengqurban,$request->input("nama_pengqurban_".$i));
        }
        $namapengqurban = implode(",",$namapengqurban);
        $total = intval($request->input("harga")) * intval($request->input("jumlah"));

        date_default_timezone_set('Asia/Jakarta');
        $date = strval(date("Y-m-d H:i:s"));
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        if ($request->input("metode_pembayaran") == "bankmandiri")
        {
            DB::insert('insert into qurban (namapengqurban,jenishewan,varian,jumlah,total,informasi,daerahdistribusi,bukti_pembayaran,id_user) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', 
            [$namapengqurban, $request->input("jenishewan"), $request->input("varian"), $request->input("jumlah"), $total, $request->input("informasi"), $request->input("daerah_distribusi"),"belum",$request->input("id_user")]);
    
            $no_invoice = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $no_rekening = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $namarek = "Care-ity";
            return redirect("/invoice?date=$date&no=$no_invoice&metode=Bank Mandiri&norek=$no_rekening&total=$total&namarek=$namarek");
        }
        elseif ($request->input("metode_pembayaran") == "bankbca")
        {
            DB::insert('insert into qurban (namapengqurban,jenishewan,varian,jumlah,total,informasi,daerahdistribusi,bukti_pembayaran,id_user) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', 
            [$namapengqurban, $request->input("jenishewan"), $request->input("varian"), $request->input("jumlah"), $total, $request->input("informasi"), $request->input("daerah_distribusi"),"belum",$request->input("id_user")]);
    
            $no_invoice = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $no_rekening = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $namarek = "Care-ity";
            return redirect("/invoice?date=$date&no=$no_invoice&metode=Bank BCA&norek=$no_rekening&total=$total&namarek=$namarek");
        }
        elseif ($request->input("metode_pembayaran") == "bankbni")
        {
            DB::insert('insert into qurban (namapengqurban,jenishewan,varian,jumlah,total,informasi,daerahdistribusi,bukti_pembayaran,id_user) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', 
            [$namapengqurban, $request->input("jenishewan"), $request->input("varian"), $request->input("jumlah"), $total, $request->input("informasi"), $request->input("daerah_distribusi"),"belum",$request->input("id_user")]);
    
            $no_invoice = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $no_rekening = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $namarek = "Care-ity";
            return redirect("/invoice?date=$date&no=$no_invoice&metode=Bank BNI&norek=$no_rekening&total=$total&namarek=$namarek");
        }
        elseif ($request->input("metode_pembayaran") == "bankbjb")
        {
            DB::insert('insert into qurban (namapengqurban,jenishewan,varian,jumlah,total,informasi,daerahdistribusi,bukti_pembayaran,id_user) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', 
            [$namapengqurban, $request->input("jenishewan"), $request->input("varian"), $request->input("jumlah"), $total, $request->input("informasi"), $request->input("daerah_distribusi"),"belum",$request->input("id_user")]);
    
            $no_invoice = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $no_rekening = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $namarek = "Care-ity";
            return redirect("/invoice?date=$date&no=$no_invoice&metode=Bank BJB&norek=$no_rekening&total=$total&namarek=$namarek");
        }
        elseif($request->input("metode_pembayaran") == "saldoakun")
        {
            if ($total > $user_data[0]->saldo)
            {
                return redirect("/");
            }
            $uniq = rand(10,100000000);
            DB::update('update user set saldo = saldo - ? where id = ?', [$total,$request->input("id_user")]);
            DB::insert('insert into pembayaran (metode,total, tanggal,catatan,namapengirim,namapenerima,uniq,id_user,jenis_bayar) 
            values (?, ?, ?, ?, ?, ?, ?, ?, "qurban")', ["Saldo Akun",$total,$date,"Qurban Saldo Akun",$namapengqurban, $request->input("daerah_distribusi"),$uniq,$user_data[0]->id]);
            return redirect("/profil/profil_saya");
        }
    }

    public function kirim_bukpem(Request $request)
    {
        $file = $request->file('buktipem');
        $file->move(public_path()."/foto/", $file->getClientOriginalName());
        DB::insert('insert into bukti_pembayaran_qurban (id_qurban, gambar) values (?, ?)', [$request->input("id_qurban"), "foto/".$file->getClientOriginalName()]);
        DB::update('update qurban set bukti_pembayaran = ? where id = ?', ["sudah",$request->input("id_qurban")]);
        return redirect("/profil/kirim_bukti_pembayaran");
    }

    public function kirim_bukpem_donasi(Request $request)
    {
        $file = $request->file('buktipem');
        $file->move(public_path()."/foto/", $file->getClientOriginalName());
        DB::insert('insert into bukti_pembayaran_donasi (id_donasi, gambar) values (?, ?)', [$request->input("id_donasi"), "foto/".$file->getClientOriginalName()]);
        DB::delete('update donasi set status = ? where id = ?', ["sudah",$request->input("id_donasi")]);
        return redirect("/profil/kirim_bukti_pembayaran");
    }

    public function kirim_bukpem_penggalangan_dana(Request $request)
    {
        $file = $request->file('buktipem');
        $file->move(public_path()."/foto/", $file->getClientOriginalName());
        DB::insert('insert into bukti_pembayaran_penggalangan_dana (id_penggalangan_dana, gambar, username) values (?, ?, ?)', [$request->input("id_penggalangan_dana"), "foto/".$file->getClientOriginalName(),$request->input("username")]);
        DB::delete('update penggalangan_dana_pembayaran set status = ? where id = ?', ["sudah",$request->input("id_penggalangan_dana")]);
        return redirect("/profil/kirim_bukti_pembayaran");
    }

    public function kirim_bukpem_zakat(Request $request)
    {
        $zakat_user = DB::select("select * from zakat where id = ?",[$request->input("id_zakat")]);
        $file = $request->file('buktipem');
        $file->move(public_path()."/foto/", $file->getClientOriginalName());
        DB::insert('insert into bukti_pembayaran_zakat (id_zakat, gambar, username,jenis_zakat) values (?, ?, ?,?)', [$request->input("id_zakat"), "foto/".$file->getClientOriginalName(),$request->input("username"),$zakat_user[0]->jenis_zakat]);
        DB::delete('update zakat set status = ? where id = ?', ["sudah",$request->input("id_zakat")]);
        return redirect("/profil/kirim_bukti_pembayaran");
    }

    public function catatantambah(Request $request)
    {
        DB::update('update pembayaran set catatan = ? where uniq = ?', [$request->input("catatan"),$request->input("uniq")]);
        return redirect("/profil/profil_saya");
    }
    
    public function donasi(Request $request, $id_donasi, $id_user)
    {
        $donatur = DB::select('select * from user where id = ?', [$id_user]);
        $data_donasi = DB::select("select * from daftar_donasi where id = ?", [$id_donasi]);
        $penerima = DB::select("select * from user where id = ?", [$data_donasi[0]->id_penerima]);
        $total = $request->input("jumlahdonasi");
        date_default_timezone_set('Asia/Jakarta');
        $date = strval(date("Y-m-d H:i:s"));
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        if ($request->input("metode_pembayaran") == "bankmandiri")
        {
            DB::insert("insert into donasi 
            (id_donasi,id_user,total_donasi,nama_donatur,nama_penerima,status) values 
            (?,?,?,?,?,?)",
            [$id_donasi,$id_user,$request->input("jumlahdonasi"),$donatur[0]->username,$penerima[0]->username,"belum"]);
            $no_invoice = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $no_rekening = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $namarek = "Care-ity";
            return redirect("/invoice?date=$date&no=$no_invoice&metode=Bank Mandiri&norek=$no_rekening&total=$total&namarek=$namarek");
        }
        elseif ($request->input("metode_pembayaran") == "bankbca")
        {
            DB::insert("insert into donasi 
            (id_donasi,id_user,total_donasi,nama_donatur,nama_penerima,status) values 
            (?,?,?,?,?,?)",
            [$id_donasi,$id_user,$request->input("jumlahdonasi"),$donatur[0]->username,$penerima[0]->username,"belum"]);
            $no_invoice = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $no_rekening = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $namarek = "Care-ity";
            return redirect("/invoice?date=$date&no=$no_invoice&metode=Bank BCA&norek=$no_rekening&total=$total&namarek=$namarek");
        }
        elseif ($request->input("metode_pembayaran") == "bankbni")
        {
            DB::insert("insert into donasi 
            (id_donasi,id_user,total_donasi,nama_donatur,nama_penerima,status) values 
            (?,?,?,?,?,?)",
            [$id_donasi,$id_user,$request->input("jumlahdonasi"),$donatur[0]->username,$penerima[0]->username,"belum"]);
            $no_invoice = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $no_rekening = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $namarek = "Care-ity";
            return redirect("/invoice?date=$date&no=$no_invoice&metode=Bank BNI&norek=$no_rekening&total=$total&namarek=$namarek");
        }
        elseif ($request->input("metode_pembayaran") == "bankbjb")
        {
            DB::insert("insert into donasi 
            (id_donasi,id_user,total_donasi,nama_donatur,nama_penerima,status) values 
            (?,?,?,?,?,?)",
            [$id_donasi,$id_user,$request->input("jumlahdonasi"),$donatur[0]->username,$penerima[0]->username,"belum"]);
            $no_invoice = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $no_rekening = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $namarek = "Care-ity";
            return redirect("/invoice?date=$date&no=$no_invoice&metode=Bank BJB&norek=$no_rekening&total=$total&namarek=$namarek");
        }
        else if($request->input("metode_pembayaran") == "saldoakun")
        {
            if ($total > $user_data[0]->saldo)
            {
                return redirect("/");
            }
            $uniq = rand(10,100000000);
            DB::update('update user set saldo = saldo - ? where id = ?', [$total,$user_data[0]->id]);
            DB::update("update daftar_donasi set dana_terkumpul = dana_terkumpul + ? where id = ?",[$total,$id_donasi]);
            DB::insert('insert into pembayaran (metode,total, tanggal,catatan,namapengirim,namapenerima,uniq,id_user, jenis_bayar) 
            values (?, ?, ?, ?, ?, ?, ?, ?, "donasi")', ["Saldo Akun",$total,$date,"Donasi Saldo Akun",$donatur[0]->username, $penerima[0]->username,$uniq,$user_data[0]->id]);
            return redirect("/profil/profil_saya");
        }
    }

    public function buat_donasi(Request $request)
    {
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        
        $file = $request->file('gambar');
        $file->move(public_path()."/foto/", $file->getClientOriginalName());

        $judul_donasi = $request->input("judul");
        $informasi = $request->input("informasi");
        $gambarpath = "foto/".$file->getClientOriginalName();
        $dana_max = $request->input("dana_max");
        $id_penerima =  $user_data[0]->id;

        DB::insert("insert into daftar_donasi (nama,informasi,gambar,id_penerima,dana_terkumpul,dana_max) values 
        (?,?,?,?,?,?)",
        [
            $judul_donasi,
            $informasi,
            $gambarpath,
            $id_penerima,
            0,
            $dana_max
        ]);
        
        return redirect("/profil/donasi");
    }

    public function buat_penggalangan_dana(Request $request)
    {
        $pembuat = DB::select("select * from user where id = ?", [$request->input("id_pembuat")]);
        $file = $request->file('gambar');
        $file->move(public_path()."/foto/", $file->getClientOriginalName());
        DB::insert("insert into penggalangan_dana 
        (judul,informasi,dana_max,gambar,id_pembuat,nama_pembuat,dana_terkumpul,jumlah_donatur,nama_donatur) values
        (?,?,?,?,?,?,?,?,?)",[
            $request->input("judul"),
            $request->input("informasi"),
            $request->input("dana_max"),
            "foto/".$file->getClientOriginalName(),
            $pembuat[0]->id,
            $pembuat[0]->username,
            0,
            0,
            ""
        ]);

        return redirect("/penggalangan_dana");
    }

    public function edit_penggalangan_dana(Request $request)
    {
        $penggalangan_dana = DB::select("select * from penggalangan_dana where id = ?",[$request->input("id_penggalangan_dana")]);
        $gambar_path = $penggalangan_dana[0]->gambar;
        if ($request->hasFile("gambar"))
        {
            $file = $request->file('gambar');
            $file->move(public_path()."/foto/", $file->getClientOriginalName());
            $gambar_path = "foto/".$file->getClientOriginalName();
        }
        DB::update("update penggalangan_dana set judul = ?, informasi = ?,dana_max = ?,gambar = ? where id = ?",
        [
            $request->input("judul"),
            $request->input("informasi"),
            $request->input("dana_max"),
            $gambar_path,
            $request->input("id_penggalangan_dana")
        ]);

        return redirect("/profil/penggalangan_dana");
    }

    public function edit_donasi(Request $request)
    {
        $donasi = DB::select("select * from daftar_donasi where id = ?",[$request->input("id_donasi")]);
        $gambar_path = $donasi[0]->gambar;
        if ($request->hasFile("gambar"))
        {
            $file = $request->file('gambar');
            $file->move(public_path()."/foto/", $file->getClientOriginalName());
            $gambar_path = "foto/".$file->getClientOriginalName();
        }
        DB::update("update daftar_donasi set nama = ?, informasi = ?,dana_max = ?,gambar = ? where id = ?",
        [
            $request->input("judul"),
            $request->input("informasi"),
            $request->input("dana_max"),
            $gambar_path,
            $request->input("id_donasi")
        ]);

        return redirect("/profil/donasi");
    }

    public function penggalangan_dana_donasi(Request $request)
    {
        $penggalangan_dana = DB::select("select * from penggalangan_dana where id = ?",[$request->input("id_penggalangan_dana")]);
        $total = $request->input("jumlahdonasi");
        date_default_timezone_set('Asia/Jakarta');
        $date = strval(date("Y-m-d H:i:s"));
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        if ($request->input("metode_pembayaran") == "bankmandiri")
        {
            DB::insert("insert into penggalangan_dana_pembayaran 
            (judul,total,status,id_user,id_penggalangan_dana) values 
            (?,?,?,?,?)",
            [$request->input("judul"),$request->input("jumlahdonasi"),"belum",$user_data[0]->id,$request->input("id_penggalangan_dana")]);
            $no_invoice = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $no_rekening = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $namarek = "Care-ity";
            return redirect("/invoice?date=$date&no=$no_invoice&metode=Bank Mandiri&norek=$no_rekening&total=$total&namarek=$namarek");
        }
        elseif ($request->input("metode_pembayaran") == "bankbca")
        {
            DB::insert("insert into penggalangan_dana_pembayaran 
            (judul,total,status,id_user,id_penggalangan_dana) values 
            (?,?,?,?,?)",
            [$request->input("judul"),$request->input("jumlahdonasi"),"belum",$user_data[0]->id,$request->input("id_penggalangan_dana")]);
            $no_invoice = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $no_rekening = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $namarek = "Care-ity";
            return redirect("/invoice?date=$date&no=$no_invoice&metode=Bank BCA&norek=$no_rekening&total=$total&namarek=$namarek");
        }
        elseif ($request->input("metode_pembayaran") == "bankbni")
        {
            DB::insert("insert into penggalangan_dana_pembayaran 
            (judul,total,status,id_user,id_penggalangan_dana) values 
            (?,?,?,?,?)",
            [$request->input("judul"),$request->input("jumlahdonasi"),"belum",$user_data[0]->id,$request->input("id_penggalangan_dana")]);
            $no_invoice = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $no_rekening = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $namarek = "Care-ity";
            return redirect("/invoice?date=$date&no=$no_invoice&metode=Bank BNI&norek=$no_rekening&total=$total&namarek=$namarek");
        }
        elseif ($request->input("metode_pembayaran") == "bankbjb")
        {
            DB::insert("insert into penggalangan_dana_pembayaran 
            (judul,total,status,id_user,id_penggalangan_dana) values 
            (?,?,?,?,?)",
            [$request->input("judul"),$request->input("jumlahdonasi"),"belum",$user_data[0]->id,$request->input("id_penggalangan_dana")]);
            $no_invoice = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $no_rekening = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $namarek = "Care-ity";
            return redirect("/invoice?date=$date&no=$no_invoice&metode=Bank BJB&norek=$no_rekening&total=$total&namarek=$namarek");
        }
        elseif($request->input("metode_pembayaran") == "saldoakun")
        {
            if ($total > $user_data[0]->saldo)
            {
                return redirect("/");
            }
            $nama_donatur = $penggalangan_dana[0]->nama_donatur;
            $jumlah_donatur = $penggalangan_dana[0]->jumlah_donatur;
            if (strpos($nama_donatur,$user_data[0]->username) !== false) {
                
            }else{
                $jumlah_donatur += 1;
                $nama_donatur = $nama_donatur.$user_data[0]->username.",";
            }
            $uniq = rand(10,100000000);
            DB::update('update user set saldo = saldo - ? where id = ?', [$total,$user_data[0]->id]);
            DB::update("update penggalangan_dana set dana_terkumpul = dana_terkumpul + ?, jumlah_donatur = ?, nama_donatur = ? where id = ?",[$total,$jumlah_donatur,$nama_donatur,$penggalangan_dana[0]->id]);
            DB::insert('insert into pembayaran (metode,total, tanggal,catatan,namapengirim,namapenerima,uniq,id_user,jenis_bayar) 
            values (?, ?, ?, ?, ?, ?, ?, ?, "penggalangan dana")', ["Transfer Bank Mandiri",$total,$date,"Penggalangan Dana Saldo Akun",$user_data[0]->username,$penggalangan_dana[0]->nama_pembuat,$uniq,$user_data[0]->id]);
            return redirect("/penggalangan_dana");
        }
    }

    public function bayar_zakat(Request $request)
    {
        $total = $request->input("jumlah");
        $date = strval(date("Y-m-d H:i:s"));
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        if ($request->input("metode_pembayaran") == "bankmandiri")
        {
            DB::insert("insert into zakat 
            (jenis_zakat,total,nama_muzakki,status,id_user) values 
            (?,?,?,?,?)",
            [$request->input("jenis_zakat"),$total,$user_data[0]->username,"belum",$user_data[0]->id]);
            $no_invoice = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $no_rekening = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $namarek = "Care-ity";
            return redirect("/invoice?date=$date&no=$no_invoice&metode=Bank Mandiri&norek=$no_rekening&total=$total&namarek=$namarek");
        }
        elseif ($request->input("metode_pembayaran") == "bankbca")
        {
            DB::insert("insert into zakat 
            (jenis_zakat,total,nama_muzakki,status,id_user) values 
            (?,?,?,?,?)",
            [$request->input("jenis_zakat"),$total,$user_data[0]->username,"belum",$user_data[0]->id]);
            $no_invoice = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $no_rekening = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $namarek = "Care-ity";
            return redirect("/invoice?date=$date&no=$no_invoice&metode=Bank BCA&norek=$no_rekening&total=$total&namarek=$namarek");
        }
        elseif ($request->input("metode_pembayaran") == "bankbni")
        {
            DB::insert("insert into zakat 
            (jenis_zakat,total,nama_muzakki,status,id_user) values 
            (?,?,?,?,?)",
            [$request->input("jenis_zakat"),$total,$user_data[0]->username,"belum",$user_data[0]->id]);
            $no_invoice = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $no_rekening = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $namarek = "Care-ity";
            return redirect("/invoice?date=$date&no=$no_invoice&metode=Bank BNI&norek=$no_rekening&total=$total&namarek=$namarek");
        }
        elseif ($request->input("metode_pembayaran") == "bankbjb")
        {
            DB::insert("insert into zakat 
            (jenis_zakat,total,nama_muzakki,status,id_user) values 
            (?,?,?,?,?)",
            [$request->input("jenis_zakat"),$total,$user_data[0]->username,"belum",$user_data[0]->id]);
            $no_invoice = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $no_rekening = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $namarek = "Care-ity";
            return redirect("/invoice?date=$date&no=$no_invoice&metode=Bank BJB&norek=$no_rekening&total=$total&namarek=$namarek");
        }
        elseif($request->input("metode_pembayaran") == "saldoakun")
        {
            if ($total > $user_data[0]->saldo)
            {
                return redirect("/");
            }
            $uniq = rand(10,100000000);
            date_default_timezone_set('Asia/Jakarta');
            $date = strval(date("Y-m-d H:i:s"));
            DB::update('update user set saldo = saldo - ? where id = ?', [$total,$user_data[0]->id]);
            DB::insert('insert into pembayaran (metode,total, tanggal,catatan,namapengirim,namapenerima,uniq,id_user,jenis_bayar) 
            values (?, ?, ?, ?, ?, ?, ?, ?,"zakat")', ["Saldo Akun",$total,$date,"Zakat Saldo Akun",$user_data[0]->username, "admin",$uniq,$user_data[0]->id]);
            return redirect("/profil/profil_saya");
        }
    }

    public function penggalangan_dana_post(Request $request)
    {
        /*
        Input :
            "gambar" = file
            "password" = string
            "id_penggalangan_dana" = int
            
        */
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        if ($request->input("password") != $user_data[0]->password){
            return redirect("/");
        }

        $file = $request->file('gambar');
        $file->move(public_path()."/foto/", $file->getClientOriginalName());

        $penggalangan_dana = DB::select("select * from penggalangan_dana where id = ?", [$request->input("id_penggalangan_dana")]);

        DB::update("update user set saldo = saldo + ? where id = ?",[$penggalangan_dana[0]->dana_terkumpul,$penggalangan_dana[0]->id_pembuat]);
        DB::delete('delete from penggalangan_dana where id = ?', [$penggalangan_dana[0]->id]);

        date_default_timezone_set('Asia/Jakarta');
        $date = strval(date("Y-m-d H:i:s"));

        DB::insert("insert into penggalangan_dana_post (tanggal,nama_penerima,jumlah,judul,gambar) values (?,?,?,?,?)",
        [$date,$penggalangan_dana[0]->nama_pembuat,$penggalangan_dana[0]->dana_terkumpul,$penggalangan_dana[0]->judul,"foto/".$file->getClientOriginalName()]);
        return redirect("/profil/histori_post");
    }

    public function donasi_post(Request $request)
    {
        /*
        Input :
            "gambar" = file
            "password" = string
            "id_donasi" = int
            "deskripsi" = string
        */
        $user_data = $this->db->get_user_data($request->session()->get("username"),$request->session()->get("password"));
        if ($request->input("password") != $user_data[0]->password){
            return redirect("/");
        }
        $donasi = DB::select("select * from daftar_donasi where id = ?", [$request->input("id_donasi")]);

        $nama_penerima = DB::select("select * from user where id = ?",[$donasi[0]->id_penerima]);

        $file = $request->file('gambar');
        $file->move(public_path()."/foto/", $file->getClientOriginalName());

        date_default_timezone_set('Asia/Jakarta');
        $date = strval(date("Y-m-d H:i:s"));

        DB::insert("insert into donasi_post (nama_penerima,tanggal,judul,jumlah,gambar) values (?,?,?,?,?)",
        [$nama_penerima[0]->username,$date,$donasi[0]->nama,$donasi[0]->dana_terkumpul,"foto/".$file->getClientOriginalName()]);

        DB::insert("insert into berita (tanggal,judul,jumlah,gambar,deskripsi) values (?,?,?,?,?)",
        [$date,$donasi[0]->nama,$donasi[0]->dana_terkumpul,"foto/".$file->getClientOriginalName(),$request->input("deskripsi")]);

        DB::delete("delete from daftar_donasi where id=?",[$donasi[0]->id]);
        return redirect("/berita");
    }

    public function edit_profil(Request $request)
    {
        if ($request->input("password") != $request->input("repassword"))
        {
            return redirect("/edit_profil");
        }
        
        DB::update("update user set username = ?, password = ?, email = ?, nohp = ? where id = ?", 
        [
            $request->input("username"),
            $request->input("password"),
            $request->input("email"),
            $request->input("nohp"),
            $request->input("id")
        ]);
        return redirect("/profil/profil_saya");
    }
}
