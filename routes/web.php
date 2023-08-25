<?php

use Illuminate\Support\Facades\Route;
use App\Http\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HalamanAdminController;
use App\Http\Controllers\KsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\TeamController;

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

Route::get('login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('tampilan');
});
// Route::get('/', function () {
//     return view('halamanAdmin');
// });
// Route::get('tampilan', function () {
//     return view('tampilan');
// });
Route::get('index', function () {
    return view('index');
});
Route::get('privasi', function () {
    return view('privasi');
});
Route::get('sk', function () {
    return view('sk');
});
Route::get('contactform', function () {
    return view('contactform');
});Route::get('contact', function () {
    return view('contact');
});
Route::get('register', function () {
    return view('registerAdmin');
});
Route::get('ks', function () {
    return view('ks');
});
Route::get('ksform', function () {
    return view('ksform');
});
Route::get('teamform', function () {
    return view('teamform');
});
Route::get('halamanAdmin', function () {
    return view('halamanAdmin');
});
Route::get('project', function () {
    return view('project');
});

Route::get('projectform', function () {
    return view('projectform');
});




// route::middleware(['guest'])->group(function(){
//     route::get('/',[SesiController::class,'index'])->name('login');
//     route::post('/',[SesiController::class,'login']);
// });



route::middleware(['guest'])->group(function(){
    route::get('login',[SesiController::class,'index'])->name('login');
    route::post('login',[SesiController::class,'login']);
});

route::get('/home', function(){
    return redirect('/halamanAdmin');
});

route::middleware('auth')->group(function(){
    route::get('/halamanAdmin',[AdminController::class,'index']);
    route::get('/halamanAdmin/pengguna',[AdminController::class,'pengguna'])->middleware('userAkses:pengguna');
                 route::get('/halamanAdmin',[AdminController::class,'index'])->middleware('userAkses:pengguna');
    Route::get('pengguna', function () {
        return view('pengguna');
    });
    Route::get('ks', function () {
        return view('ks');
    });
    route::get('logout', [SesiController::class,'logout']);
});



Route::get('ks',[KsController::class, 'show']);
Route::post('ks/create',[KsController::class, 'create']);
Route::get('ks/add',[KsController::class, 'add']);
Route::get('ks/hapus/{id}',[KsController::class, 'hapus']);
Route::get('ks/edit/{id}',[KsController::class, 'edit']);
Route::post('ks/update/{id}',[KsController::class, 'update']);



Route::get('team',[TeamController::class, 'show']);
Route::get('team/add',[TeamController::class, 'add']);
Route::post('team/create',[TeamController::class, 'create']);
Route::get('team/hapus/{id}',[TeamController::class, 'hapus']);
Route::get('team/edit/{id}',[TeamController::class, 'edit']);
Route::post('team/update/{id}',[TeamController::class, 'update']);

Route::get('project',[ProjectController::class, 'show']);
Route::get('project/add',[ProjectController::class, 'add']);
Route::post('project/create',[ProjectController::class, 'create']);
Route::get('project/hapus/{id}',[ProjectController::class, 'hapus']);
Route::get('project/edit/{id}',[ProjectController::class, 'edit']);
Route::post('project/update/{id}',[ProjectController::class, 'update']);

Route::get('halamanAdmin',[HalamanAdminController::class, 'show']);
