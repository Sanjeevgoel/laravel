<?php

use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('layouts/app');
}); */
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/logout', function (Request $request) {
    Auth::logout();
    return redirect('/login');
});
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->middleware('auth');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::get('/register', function (Request $request) { return view('auth/register'); });

Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create']);
Route::get('/service', [App\Http\Controllers\ServiceController::class, 'index'])->name('service');
Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'index'])->name('gallery');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'someMethod']);
Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->middleware('auth');
Route::get('/admin/service', [App\Http\Controllers\Admin\ServiceController::class, 'index'])->middleware('auth');
Route::get('/admin/addservice', [App\Http\Controllers\Admin\AddServiceController::class, 'index'])->middleware('auth');
Route::post('/admin/addservice', [App\Http\Controllers\Admin\AddServiceController::class, 'createservice'])->middleware('auth');
Route::get('/admin/addservice/{id}', [App\Http\Controllers\Admin\AddServiceController::class, 'getForm'])->middleware('auth');
Route::get('/admin/delete_service/{id}', [App\Http\Controllers\Admin\AddServiceController::class, 'getDelete']);
Route::get('/admin/contact', [App\Http\Controllers\Admin\ContactController::class, 'index'])->middleware('auth');
Route::get('/admin/gallery', [App\Http\Controllers\Admin\AlbumsController::class, 'getList'])->middleware('auth');
Route::get('/admin/createalbum/', [App\Http\Controllers\Admin\AlbumsController::class, 'getAlbum'])->middleware('auth');
Route::get('/admin/createalbum/{id}', [App\Http\Controllers\Admin\AlbumsController::class, 'getForm'])->middleware('auth');
Route::post('/admin/createalbum', [App\Http\Controllers\Admin\AlbumsController::class, 'postCreate'])->middleware('auth');
Route::get('/admin/gallery/deletealbum/{id}', array('as' => 'delete_album','uses' => 'AlbumsController@getDelete'))->middleware('auth');
Route::get('/admin/delete_gallery/{id}', [App\Http\Controllers\Admin\AlbumsController::class, 'getDelete'])->middleware('auth');

Route::get('/admin/contact', [App\Http\Controllers\Admin\ContactController::class, 'getList'])->middleware('auth');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'createcontacts']);
Route::get('/admin/delete_contact/{id}', [App\Http\Controllers\ContactController::class, 'getDelete']);