<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class,"index"]);
Route::get('/berita', [MainController::class,"berita"]);
Route::get('/tentang_kami', [MainController::class,"tentang_kami"]);
Route::get('/penggalangan_dana', [MainController::class,"penggalangan_dana"]);
Route::get('/donasi', [MainController::class,"donasi"]);
Route::get('/zakat', [MainController::class,"zakat"]);
Route::get('/qurban', [MainController::class,"qurban"]);
Route::get('/login', [MainController::class,"login"]);
Route::get('/register', [MainController::class,"register"]);
Route::get('/logout', [MainController::class,"logout"]);
Route::get('/invoice', [MainController::class,"invoice"]);
Route::get("/zakat/kalkulator",[MainController::class,"zakat_kalkulator"]);

Route::get("zakat/bayar/{jenis_zakat}",[MainController::class,"form_zakat"]);
Route::get('/penggalangan_dana/form', [MainController::class,"form_penggalangan_dana"]);
Route::get('/donasi/form', [MainController::class,"form_donasi"]);

Route::get('/tolak_pembayaran/{id_buktipem}/{id_qurban}', [MainController::class,"tolak_pembayaran"]);
Route::get('/tolak_pembayaran_donasi/{id_buktipem}/{id_donasi}', [MainController::class,"tolak_pembayaran_donasi"]);
Route::get('/tolak_pembayaran_penggalangan_dana/{id_buktipem}/{id_penggalangan_dana}', [MainController::class,"tolak_pembayaran_penggalangan_dana"]);
Route::get('/tolak_pembayaran_zakat/{id_buktipem}/{id_zakat}', [MainController::class,"tolak_pembayaran_zakat"]);

Route::get('/terima_pembayaran/{id_buktipem}/{id_qurban}', [MainController::class,"terima_pembayaran"]);
Route::get('/terima_pembayaran_donasi/{id_buktipem}/{id_donasi}', [MainController::class,"terima_pembayaran_donasi"]);
Route::get('/terima_pembayaran_penggalangan_dana/{id_buktipem}/{id_penggalangan_dana}', [MainController::class,"terima_pembayaran_penggalangan_dana"]);
Route::get('/terima_pembayaran_zakat/{id_buktipem}/{id_zakat}', [MainController::class,"terima_pembayaran_zakat"]);

Route::get('/kirim_bukti_pembayaran/{id_qurban}', [MainController::class,"kirimbukpem"]);
Route::get('/kirim_bukti_pembayaran_donasi/{id_donasi}', [MainController::class,"kirimbukpem_donasi"]);
Route::get('/kirim_bukti_pembayaran_penggalangan_dana/{id_penggalangan_dana}', [MainController::class,"kirimbukpem_penggalangan_dana"]);
Route::get('/kirim_bukti_pembayaran_zakat/{id_zakat}', [MainController::class,"kirimbukpem_zakat"]);

Route::get('/profil/{halaman}', [MainController::class,"profil"]);

Route::get("/bukti/qurban/batal/{id_qurban}", [MainController::class,"batal_bukti_qurban"]);
Route::get("/bukti/donasi/batal/{id_donasi}", [MainController::class,"batal_bukti_donasi"]);
Route::get("/bukti/zakat/batal/{id_zakat}",[MainController::class,"batal_bukti_zakat"]);

Route::get("/bukti/penggalangan_dana/batal/{id_peggalangan_dana}", [MainController::class,"batal_bukti_penggalangan_dana"]);
Route::get('/beli_qurban/{id_qurban}', [MainController::class,"beli_qurban"]);
Route::get('/profil/pembayaran_tambahcatatan/{uniq}',[MainController::class,"terima_pembayaran_tambah_catatan"]);

Route::get('/donasi/donasi/{id_donasi}', [MainController::class,"detail_donasi"]);
Route::get('/penggalangan_dana/donasi/{id_penggalangan_dana}',[MainController::class,"detail_penggalangan_dana"]);
Route::get("/penggalangan_dana/hapus/{id_penggalangan_dana}",[MainController::class,"hapus_penggalangan_dana"]);
Route::get("/penggalangan_dana/edit/{id_penggalangan_dana}",[MainController::class,"edit_penggalangan_dana"]);
Route::get("/donasi/hapus/{id_donasi}",[MainController::class,"hapus_donasi"]);
Route::get("/donasi/edit/{id_donasi}",[MainController::class,"edit_donasi"]);

Route::get("/penggalangan_dana/form_post/{id}", [MainController::class,"penggalangan_dana_form_post"]);
Route::get("/donasi/form_post/{id}", [MainController::class,"donasi_form_post"]);

Route::get("/berita/detail/{id}",[MainController::class,"detail_berita"]);
//// POST

Route::post('/auth/register', [PostController::class,"auth_register"]);
Route::post('/auth/login', [PostController::class,"auth_login"]);

Route::post('/beli/qurban', [PostController::class,"beli_qurban"]);

Route::post("kirim/bukti_pembayaran",[PostController::class,"kirim_bukpem"]);
Route::post("kirim/bukti_pembayaran_donasi",[PostController::class,"kirim_bukpem_donasi"]);
Route::post("kirim/bukti_pembayaran_penggalangan_dana",[PostController::class,"kirim_bukpem_penggalangan_dana"]);
Route::post("kirim/bukti_pembayaran_zakat",[PostController::class,"kirim_bukpem_zakat"]);

Route::post("/catatantambah",[PostController::class,"catatantambah"]);
Route::post("/donasi/{id_donasi}/{id_user}",[PostController::class,"donasi"]);

Route::post("/donasi/baru",[PostController::class,"buat_donasi"]);
Route::post("/donasi/edit",[PostController::class,"edit_donasi"]);

Route::post("/penggalangan_dana/baru",[PostController::class,"buat_penggalangan_dana"]);
Route::post("/penggalangan_dana/edit",[PostController::class,"edit_penggalangan_dana"]);
Route::post("/penggalangan_dana/donasi",[PostController::class,"penggalangan_dana_donasi"]);
Route::post("/zakat/proses/bayar",[PostController::class,"bayar_zakat"]);

Route::post("/penggalangan_dana/post",[PostController::class,"penggalangan_dana_post"]);
Route::post("/donasi/post",[PostController::class,"donasi_post"]);
Route::post("/edit_profil",[PostController::class,"edit_profil"]);