<?php

use App\Exports\PembagianKelasExport;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\LogGuruController;
use App\Http\Controllers\PembagianKelasController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/welcome', function () {
  return view('welcome');
});

Route::get('/', function () {
  return view('landing/index');
});


Route::get('/berita', function () {
  return view('landing/berita');
});

Route::get('/clear-cache', function () {
  Artisan::call('config:clear');
  Artisan::call('cache:clear');
  Artisan::call('config:cache');
  return 'DONE';
});

Route::get('/berita', function () {
  return view('landing/berita');
});

Auth::routes();
Route::get('/login/cek_email/json', 'UserController@cek_email');
Route::get('/login/cek_password/json', 'UserController@cek_password');
Route::post('/cek-email', 'UserController@email')->name('cek-email')->middleware('guest');
Route::get('/reset/password/{id}', 'UserController@password')->name('reset.password')->middleware('guest');
Route::patch('/reset/password/update/{id}', 'UserController@update_password')->name('reset.password.update')->middleware('guest');

Route::middleware(['auth'])->group(function () {
  // Route::get('/', 'HomeController@index')->name('home');
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/home-siswa', 'HomeController@index_siswa')->name('home-siswa');
  Route::get('/jadwal/sekarang', 'JadwalController@jadwalSekarang');
  Route::get('/profile', 'UserController@profile')->name('profile');
  Route::get('/pengaturan/profile', 'UserController@edit_profile')->name('pengaturan.profile');
  Route::post('/pengaturan/ubah-profile', 'UserController@ubah_profile')->name('pengaturan.ubah-profile');
  Route::get('/pengaturan/edit-foto', 'UserController@edit_foto')->name('pengaturan.edit-foto');
  Route::post('/pengaturan/ubah-foto', 'UserController@ubah_foto')->name('pengaturan.ubah-foto');
  Route::get('/pengaturan/email', 'UserController@edit_email')->name('pengaturan.email');
  Route::post('/pengaturan/ubah-email', 'UserController@ubah_email')->name('pengaturan.ubah-email');
  Route::get('/pengaturan/password', 'UserController@edit_password')->name('pengaturan.password');
  Route::post('/pengaturan/ubah-password', 'UserController@ubah_password')->name('pengaturan.ubah-password');

  Route::middleware(['siswa'])->group(function () {
    Route::get('/jadwal/siswa', 'JadwalController@siswa')->name('jadwal.siswa');
    Route::get('/ulangan/siswa', 'UlanganController@siswa')->name('ulangan.siswa');
    Route::get('/sikap/siswa', 'SikapController@siswa')->name('sikap.siswa');
    Route::get('/rapot/siswa', 'RapotController@siswa')->name('rapot.siswa');
    Route::get('/pelanggaran/siswa', 'PelanggaranController@siswa')->name('pelanggaran.siswa');
  });

  Route::middleware(['guru' || 'kepsek'])->group(function () {
    Route::get('/jadwal/guru', 'JadwalController@guru')->name('jadwal.guru');
    Route::get('/rapot/predikat', 'RapotController@predikat');
    Route::resource('/rapot', 'RapotController');
    Route::get('/rapor', 'RapotController@create')->name('rapor');
    Route::get('/rapot-siswa/{id}', 'RapotController@edit')->name('rapot-siswa');
    Route::get('/rapot-show/{id}', 'RapotController@rapot')->name('rapot-show');
  });

  // Route::middleware(['bk'])->group(function () {
  //   Route::get('/datasiswa', 'SiswaController@index')->name('data-siswa');
  //   Route::get('/pelanggaransiswa', 'PelanggaranController@index')->name('pelanggaran-siswa');
  //   Route::resource('/pelanggaran', 'PelanggaranController');
  //   Route::post('/pelanggaran/store', 'PelanggaranController@store');
  //   // Route::resource('/siswa', 'SiswaController');
  //   // Route::get('/siswa/kelas/{id}', 'SiswaController@kelas')->name('siswa.kelas');
  //   // Route::get('/siswa/view/json', 'SiswaController@view');

  //   Route::get('/siswa/kelas/{id}', 'SiswaController@kelas')->name('siswa.kelas');
  //   Route::get('/siswa/view/json', 'SiswaController@view');
  //   Route::get('/listsiswapdf/{id}', 'SiswaController@cetak_pdf');
  //   Route::get('/siswa/ubah-foto/{id}', 'SiswaController@ubah_foto')->name('siswa.ubah-foto');
  //   Route::post('/siswa/update-foto/{id}', 'SiswaController@update_foto')->name('siswa.update-foto');
  //   Route::get('/siswa/export_excel', 'SiswaController@export_excel')->name('siswa.export_excel');
  //   Route::post('/siswa/import_excel', 'SiswaController@import_excel')->name('siswa.import_excel');
  //   Route::delete('/siswa/deleteAll', 'SiswaController@deleteAll')->name('siswa.deleteAll');
  //   Route::resource('/siswa', 'SiswaController');
  // });

  Route::middleware(['admin'])->group(function () {
    Route::middleware(['trash'])->group(function () {
      Route::get('/jadwal/trash', 'JadwalController@trash')->name('jadwal.trash');
      Route::get('/jadwal/restore/{id}', 'JadwalController@restore')->name('jadwal.restore');
      Route::delete('/jadwal/kill/{id}', 'JadwalController@kill')->name('jadwal.kill');
      Route::get('/guru/trash', 'GuruController@trash')->name('guru.trash');
      Route::get('/guru/restore/{id}', 'GuruController@restore')->name('guru.restore');
      Route::delete('/guru/kill/{id}', 'GuruController@kill')->name('guru.kill');
      Route::get('/kelas/trash', 'KelasController@trash')->name('kelas.trash');
      Route::get('/kelas/restore/{id}', 'KelasController@restore')->name('kelas.restore');
      Route::delete('/kelas/kill/{id}', 'KelasController@kill')->name('kelas.kill');
      Route::get('/siswa/trash', 'SiswaController@trash')->name('siswa.trash');
      Route::get('/siswa/restore/{id}', 'SiswaController@restore')->name('siswa.restore');
      Route::delete('/siswa/kill/{id}', 'SiswaController@kill')->name('siswa.kill');
      Route::get('/mapel/trash', 'MapelController@trash')->name('mapel.trash');
      Route::get('/mapel/restore/{id}', 'MapelController@restore')->name('mapel.restore');
      Route::delete('/mapel/kill/{id}', 'MapelController@kill')->name('mapel.kill');
      Route::get('/user/trash', 'UserController@trash')->name('user.trash');
      Route::get('/user/restore/{id}', 'UserController@restore')->name('user.restore');
      Route::delete('/user/kill/{id}', 'UserController@kill')->name('user.kill');
      Route::post('/user/changeStatus/{id}', 'UserController@changeStatus')->name('user.changeStatus');
  
    });
    Route::get('/admin/home', 'HomeController@admin')->name('admin.home');
    Route::get('/admin/pengumuman', 'PengumumanController@index')->name('admin.pengumuman');
    Route::post('/admin/pengumuman/simpan', 'PengumumanController@simpan')->name('admin.pengumuman.simpan');
    Route::get('/guru/kehadiran/{id}', 'GuruController@kehadiran')->name('guru.kehadiran');
    Route::get('/guru/kehadiran/{id}', 'GuruController@kehadiran')->name('guru.kehadiran');
    Route::get('/guru/show/{id}', 'GuruController@show')->name('guru.show');
    Route::get('/absen/json', 'GuruController@json');
    Route::get('/guru/mapel/{id}', 'GuruController@mapel')->name('guru.mapel');
    Route::get('/guru/ubah-foto/{id}', 'GuruController@ubah_foto')->name('guru.ubah-foto');
    Route::post('/guru/update-foto/{id}', 'GuruController@update_foto')->name('guru.update-foto');
    Route::post('/guru/upload', 'GuruController@upload')->name('guru.upload');
    Route::get('/guru/export_excel', 'GuruController@export_excel')->name('guru.export_excel');
    Route::post('/guru/import_excel', 'GuruController@import_excel')->name('guru.import_excel');
    Route::delete('/guru/deleteAll', 'GuruController@deleteAll')->name('guru.deleteAll');
    Route::resource('/guru', 'GuruController');
    Route::get('/kelas/edit/json', 'KelasController@getEdit');
    Route::resource('/kelas', 'KelasController');
    Route::get('/siswa/kelas/{id}', 'SiswaController@kelas')->name('siswa.kelas');
    Route::get('/siswa/view/json', 'SiswaController@view');
    Route::get('/listsiswapdf/{id}', 'SiswaController@cetak_pdf');
    Route::get('/siswa/ubah-foto/{id}', 'SiswaController@ubah_foto')->name('siswa.ubah-foto');
    Route::post('/siswa/update-foto/{id}', 'SiswaController@update_foto')->name('siswa.update-foto');
    Route::get('/siswa/export_excel', 'SiswaController@export_excel')->name('siswa.export_excel');
    Route::get('/siswa/export_excel_filter', 'SiswaController@export_excel_filter')->name('siswa.export_excel_filter');
    Route::post('/siswa/import_excel', 'SiswaController@import_excel')->name('siswa.import_excel');
    Route::delete('/siswa/deleteAll', 'SiswaController@deleteAll')->name('siswa.deleteAll');
    Route::resource('/siswa', 'SiswaController');
    Route::get('/mapel/getMapelJson', 'MapelController@getMapelJson');
    Route::resource('/mapel', 'MapelController');
    Route::resource('/rapot', 'RapotController');
    Route::resource('/semester', 'SemesterController');

    Route::resource('/log_guru', 'LogGuruController');
    Route::resource('/log_siswa', 'LogSiswaController');
    Route::resource('/log_rapor', 'LogRaporController');
    Route::resource('/log_wali_kelas', 'LogWaliKelasController');
    Route::resource('/log_kelas_siswa', 'LogKelasSiswaController');
    Route::resource('/log_jadwal_belajar_mengajar', 'LogJadwalBelajarMengajarController');

    // ################### ROUTE PELANGGARAN #######################
    // Route::resource('/pelanggaran', 'ViolationController');
    Route::resource('/pelanggaran', 'PelanggaranController');
    //Route::get('/pelanggaran', 'PelanggaranController@create');
    Route::post('/pelanggaran/store', 'PelanggaranController@store');
    Route::get('/guru/pelanggaran', 'ViolationController@index');
    // ################### END ROUTE PELANGGARAN #######################

    //################## ROUTE GURU MENGAJAR MAPEL#######################
    Route::resource('/guru_mapel', 'GuruMengajarController');
    Route::post('/guru_mapel/store', 'GuruMengajarController@store')->name('guru_mapel.store');
    Route::get('/edit-guru-mapel/{id}', 'GuruMengajarController@edit')->name('edit-guru-mapel');//name adalah isi dari route, yg dipanggil
    Route::post('/update-guru-mapel/{id}', 'GuruMengajarController@update')->name('guru_mapel.update');
    Route::get('/delete-guru-mapel/{id}', 'GuruMengajarController@destroy');
    //################## END ROUTE GURU MENGAJAR MAPEL#######################

    // ################### ROUTE TERBARU #######################
    Route::resource('/status_kepeg', StatusKepegawaianController::class);
    Route::resource('/status_siswa', StatusSiswaController::class);
    Route::resource('/jenisptk', JenisPtkController::class);
    Route::resource('/tugastambahanguru', TugasTambahanGuruController::class);
    Route::resource('/ruangan', RuanganController::class);
    Route::resource('/tahun_ajaran', TahunAjaranController::class);
    // Route::post('/tahun_ajaran/changeStatus/{id}', 'TahunAjaranController@changeStatus')->name('TahunAjaran.changeStatus');
    Route::post('/tahun_ajaran/changeStatus/{id}', 'TahunAjaranController@changeStatus')->name('TahunAjaran.changeStatus');
    Route::post('/tahun_ajaran/changeStatus2/{id}', 'TahunAjaranController@changeStatus2')->name('TahunAjaran.changeStatus2');
    Route::get('/edit-tugastambahanguru/{id}', 'TugasTambahanGuruController@edit')->name('TugasTambahanGuru.store');
    Route::get('/update-tugastambahanguru/{id}', 'TugasTambahanGuruController@update')->name('TugasTambahanGuru.update');
    Route::post('/edit-jenisptk/{id}', 'JenisPtkController@edit')->name('JenisPtk.store');
    Route::get('/update-jenis_ptk/{id}', 'JenisPtkController@update')->name('JenisPtk.update');

    Route::get('/jadwal/view/json', 'JadwalController@view');
    Route::get('/jadwalkelaspdf/{id}', 'JadwalController@cetak_pdf');
    Route::post('/tambahkanjadwal', 'JadwalController@store2')->name('jadwal.store2');
    Route::get('/jadwal/export_excel', 'JadwalController@export_excel')->name('jadwal.export_excel');
    Route::post('/jadwal/import_excel', 'JadwalController@import_excel')->name('jadwal.import_excel');
    Route::delete('/jadwal/deleteAll', 'JadwalController@deleteAll')->name('jadwal.deleteAll');
    Route::resource('/jadwal', 'JadwalController');
    Route::get('/ulangan-kelas', 'UlanganController@create')->name('ulangan-kelas');
    Route::get('/ulangan-siswa/{id}', 'UlanganController@edit')->name('ulangan-siswa');
    Route::get('/ulangan-show/{id}', 'UlanganController@ulangan')->name('ulangan-show');
    Route::get('/sikap-kelas', 'SikapController@create')->name('sikap-kelas');
    Route::get('/sikap-siswa/{id}', 'SikapController@edit')->name('sikap-siswa');
    Route::get('/sikap-show/{id}', 'SikapController@sikap')->name('sikap-show');
    Route::get('/rapor', 'RapotController@create')->name('rapor');
    Route::get('/rapor-siswa-siswa', 'RapotController@create2')->name('rapor-guru');
    Route::get('/rapor-siswa-sman14', 'RapotController@index')->name('rapor-read');
    Route::get('/rapot-siswa/{id}', 'RapotController@edit')->name('rapot-siswa');
    Route::get('/rapot-show/{id}', 'RapotController@rapot')->name('rapot-show');
    Route::post('/rapot-cari-siswa', 'RapotController@cari_siswa')->name('rapor.cari_siswa');
    Route::get('/predikat', 'NilaiController@create')->name('predikat');
    Route::get('/simpan_nilai', 'NilaiController@create')->name('simpan.nilai');
    Route::get('/tambahkankepsek', 'UserController@editkepsek')->name('editkepsek');
    Route::post('/tambahkankepsek', 'UserController@editkepsek2')->name('editkepsek2');
    Route::post('/users/{id}', 'UserController@edit_guru')->name('edit_guru');
    Route::resource('/user', 'UserController');

    //Route Pembagian Kelas
    Route::resource('/pembagiankelas', 'PembagianKelasController');
    Route::post('/pembagiankelas/store', 'PembagianKelasController@store');
    Route::get('/pembagiankelas/export_excel', 'PembagianKelasController@export_excel')->name('pembagiankelas.export_excel');

    Route::resource('/kurikulum', 'KurikulumController');
    Route::post('/kurikulum/changeStatus/{id}', 'KurikulumController@changeStatus')->name('Kurikulum.changeStatus');
    Route::resource('/jurusan', 'JurusanController');
    Route::resource('/wali_kelas', 'WaliKelasController');

    //Change Password
    Route::get('password/edit', [ChangePasswordController::class, 'edit'])->name('password.edit');
    Route::put('password/update', [ChangePasswordController::class, 'update'])->name('password.update');
  });
});
