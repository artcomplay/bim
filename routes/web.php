<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/объемные_буквы', function () {
    return view('large_letters');
});

Route::get('/световые_короба', function () {
    return view('light_boxes');
});

Route::get('/реклама_на_авто', function () {
    return view('advertising_cars');
});

Route::get('/таблички_и_вывески', function () {
    return view('signs_signs');
});

Route::get('/cтенды_информации', function () {
    return view('information_stands');
});

Route::get('/интерьерная_реклама', function () {
    return view('interior_advertising');
});

Route::get('/штендеры', function () {
    return view('pillars');
});

Route::get('/оклейка_витрин', function () {
    return view('window_display');
});

Route::get('/указатели_пилоны', function () {
    return view('pointers_pylons');
});

Route::get('/таблички_на_дом', function () {
    return view('signs_house');
});

Route::get('/широкоформатная_печать', function () {
    return view('large_printing');
});

Route::get('/бегущая_строка', function () {
    return view('running_line');
});

Route::get('/эксклюзивное_освещение', function () {
    return view('exclusive_lighting');
});

Route::get('/оставить_заявку', function () {
    return view('leave_request');
});

Route::post('/оставить_заявку', [ContactController::class, 'leave_request'])->name('contact-form');

Route::get('gallery', [GalleryController::class, 'get_photo_from_instagramm']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
