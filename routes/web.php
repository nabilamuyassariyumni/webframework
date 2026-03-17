<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { //memanggil sebuah kelas, :: = methot static, '/' = 
    return view('welcome');
});

Route::get('/home', function(){
    echo "Halaman Home <br>";
    echo "Baris Kedua";
});

Route::get('/mahasiswa/ti/yumni', function(){
    echo "Selamat Datang Yumni";
});

Route::get('/mahasiswa/{nama}', function($nama){
    return "Selamat Datang $nama";
});

// route paramenter
Route::get('/mahasiswa/{nama?}/{nim}', function($nama, $nim){
    return "Selamat Datang $nama , NIP: $nim";
});

// route optional paramenter
//Route::get('/dosen/{nama?}/{nip?}', function($nama= "", $nip = ""){
//    return "Selamat Datang $nama , NIP: $nip";
//});

//route rederect //membaca yang terakhir
Route::redirect('/home', '/');

//route fallback
// Route::fallback(function(){
// return "Halaman tidak ditemukan";
// });

//Route::get('/mahasiswa', function(){
//    $arrMhs = [
//        'mhs1' => 'Nabila Myumni',
//        'mhs2' => 'Zahra'
//    ];
//    return view('akademik.mahasiswa')->with($arrMhs); //method with()
//    //return view('akademik.mahasiswa', $arrMhs); => parameter ke-2 view
//});

//Route::get('/mahasiswa', function(){
//    $nama = 'Nabila Muyassari Yumni';
//    $nim = '2401092010';
//    $total_nilai=100;
//    return view('akademik.nilai_mahasiswa', compact('nama','nim','total_nilai'));
//});

Route::get('/perulangan', function(){
    $nama = "Nabila Muyassari Yumni";
    $nim = "2401092010";
    $total_nilai = [80, 70, 20, 60, 45];
    return view('akademik.perulangan', compact('nama','nim','total_nilai'));
});

Route::get('/mahasiswa', function(){
    $arrMhs=['Akmal', 'Akmal', 'Akmal', 'Akmal', 'Akmal'];
    return view('akademik.mahasiswa',['mhs'=>$arrMhs]);
});

Route::get('/dosen', function(){
    $arrDosen=['Yusuf', 'Akmal', 'Akmal', 'Akmal', 'Akmal'];
    return view('akademik.dosen', ['dosen'=>$arrDosen]);
});

Route::get('/pnp/{jurusan}/{prodi}', function($jurusan,$prodi){
    $data = [$jurusan,$prodi];
    return view('akademik.prodi')-> with('data',$data);
})->name('prodi');
