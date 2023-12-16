<?php

use App\Models\Students;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentsController;

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

Route::get('/', function () {
    return view('front.index');
});

Route::get('/about', function () {
    return view('front.about');
});

Route::get('/faq', function () {
    return view('front.faq');
});

Route::get('/contact', function () {
    return view('front.contact');
});



Route::get('/dashboard-admin', function () {

    // $jumlahstudents = Students::count();
    // $jumlahcowo = Students::where('jk', 'lk')->count();
    // $jumlahcewe = Students::where('jk', 'pr')->count();

    return view('dashboard-admin');
})->middleware('auth');


Route::group(['middleware' => ['auth', 'hakakses:2']], function () {
    Route::get('/students', [StudentsController::class, 'index'])->name('students')->middleware('auth');
});

Route::group(['middleware' => ['auth', 'hakakses:2']], function () {
    Route::get('/dashboard-admin', [StudentsController::class, 'dashboardadmin'])->name('dashboardadmin');
});

Route::get('/tambahstudents', [StudentsController::class, 'tambahstudents'])->name('tambahstudents');
Route::post('/insertdata', [StudentsController::class, 'insertdata'])->name('insertdata');
Route::get('/indexstudent', [loginController::class, 'indexstudent'])->name('indexstudent');
//menampilkan data berdasarkan ID pada update
Route::get('/tampilkandata/{id}', [StudentsController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [StudentsController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [StudentsController::class, 'delete'])->name('delete');

//export PDF
Route::get('/exportpdf', [StudentsController::class, 'exportpdf'])->name('exportpdf');

//export excel
// Route::get('/exportexcel',[StudentsController::class, 'exportexcel'])->name('exportexcel');

//import data
Route::post('/importexcel', [StudentsController::class, 'importexcel'])->name('importexcel');



Route::get('/indexs', [StudentsController::class, 'indexs'])->name('indexs');
Route::get('/userdata', [StudentsController::class, 'userdata'])->name('userdata');

//menampilkan data berdasarkan ID pada update user
Route::get('/tampilkandatauser/{id}', [StudentsController::class, 'tampilkandatauser'])->name('tampilkandatauser');
Route::post('/updatedatauser/{id}', [StudentsController::class, 'updatedatauser'])->name('updatedatauser');
Route::get('/deleteuser/{id}', [StudentsController::class, 'deleteuser'])->name('deleteuser');


Route::get('/login', [loginController::class, 'login'])->name('login');
Route::post('/loginproses', [loginController::class, 'loginproses'])->name('loginproses');

// get untuk menam[pilkan view, post untuk menyimpan data ke dalam database]
Route::get('/registerakun', [loginController::class, 'registerakun'])->name('registerakun');
Route::post('/registerakunuser', [loginController::class, 'registerakunuser'])->name('registerakunuser');

Route::get('/logout', [loginController::class, 'logout'])->name('logout');

Route::get('/paymentstudents', [PaymentController::class, 'paymentstudents'])->name('paymentstudents');
Route::post('/checkout', [PaymentController::class, 'checkout'])->name('checkout');

Route::get('/tambahdataasstudent', [UserController::class, 'tambahdataasstudent'])->name('tambahdataasstudent')->middleware('auth');
Route::post('/insertdatauser', [UserController::class, 'insertdatauser'])->name('insertdatauser')->middleware('auth');


Route::get('/datapayment', function () {
    return view('datapayment');
});

Route::get('/datapayments', [StudentsController::class, 'datapayments'])->name('datapayment');
// Route::get('/datapayment/{id}',[StudentsController::class, 'datapayment'])->name('datapayment');
