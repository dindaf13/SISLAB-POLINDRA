<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\Artikel;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Review2;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestInputController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/test', function () { // test disini adalah bagian url
    return view('test'); // sedangkan test disini adalah file dari view nya
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/test_controller/{param1}', [TestController::class, 'index']);

Route::get('/artikel/{param1}', [Artikel::class, 'index']);

Route::get('/table', [Review2::class, 'index']);

Route::get('/crud-user', function () {
    return view('crud_user');
});

// Route::middleware(['guest'])->group(function (){

//     Route::get('/login', [AuthController::class, 'login'])->name('login');
//     Route::post('/login', [AuthController::class, 'test_login']);
// });
// Route::get('/home', function(){
//     return redirect('/dashboard');
// });

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'test_login']);
Route::get('/forgot_password', [AuthController::class, 'forgot_password'])->name('forgot.password');

// Route::middleware(['auth'])->group(function (){
//     Route::get('/dashboard', [AdministratorController::class, 'login']);
//     Route::get('/dashboard/admin', [AdministratorController::class, 'admin'])->middleware('userAkses:admin');
//     Route::get('/dashboard/mahasiswa', [AdministratorController::class, 'mahasiswa'])->middleware('userAkses:mahasiswa');
// });

// Route::get('/administrator', [AdministratorController::class, 'administrator'])->name('administrator');
Route::get('/dashboard', [AdministratorController::class, 'dashboard'])->name('dashboard');
Route::get('/user_admin', [AdministratorController::class, 'user_admin'])->name('user_admin');
Route::get('/user_mhs', [AdministratorController::class, 'user_mhs'])->name('user_mhs');
Route::get('/data_barang', [AdministratorController::class, 'data_barang'])->name('data_barang');
// Route::get('/crud_barang', [AdministratorController::class, 'crud_barang'])->name('crud_barang');

// Route::get('/crud_user', function () {
//     return view('crud_user');
// });
// Route::get('/crud_barang', function () {
//     return view('crud_barang');
// });

Route::get('/testing-input-dummy', [TestInputController::class, 'index']);

Route::get('/testing-input', [TestInputController::class, 'test_input'])->name('input.get');

Route::get('/testing-input-form', [TestInputController::class, 'form']);

Route::get('/testing-view', [TestInputController::class, 'table']);
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
