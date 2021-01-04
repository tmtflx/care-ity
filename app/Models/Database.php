<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Database extends Model
{
    use HasFactory;

    public function register_user($email,$username,$password,$nohp)
    {
        $users = DB::select("select * from user where username=? and email=?",[$username,$email]);
        if ($users != null)
            return -1; // username sudah dipakai
        DB::insert('insert into user (username,password,email,nohp) values (?, ?, ?, ?)', 
        [$username,$password,$email,$nohp]);
        return 1;
    }

    public function login_user($username,$password)
    {
        $login = DB::select('select * from user where username = ? and password = ?', [$username,$password]);
        if ($login == null)
            return -1; // username/password tidak valid
        return 1;
    }

    public function get_user_data($username,$password)
    {
        $login = DB::select('select * from user where username = ? and password = ?', [$username,$password]);
        return $login;
    }

    public function get_hewan_qurban_data($id_qurban)
    {
        $data = DB::select('select * from hewan_kurban where id = ?', [$id_qurban]);
        return $data[0];
    }

    public function get_buktipem_qurban_belum($id_user)
    {
        $data = DB::select('select * from qurban where id_user = ? and bukti_pembayaran="belum"', [$id_user]);
        
        return $data;
    }
}
