<?php

use App\Http\Livewire\Admin\Home\Home;
use App\Http\Livewire\Admin\Categories\Categories;
use App\Http\Livewire\Admin\News\News;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;

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
    $blogs = Blog::latest()->take(3)->get();
    return view('index', compact('blogs'));
})->name('index');

Route::get('/nosotros', function () {
    return view('about');
})->name('about');

Route::get('/servicios', function () {
    return view('services');
})->name('services');

Route::get('/blog', function () {
    $blogs = Blog::latest()->get();
    return view('blog', compact('blogs'));
})->name('blog');

Route::get('/blog/{url}', function () {
    $blog = Blog::where('url', 'actividades-empresariales-de-las-personas-fisicas')->first();
    return view('blog-detail', compact('blog'));
})->name('blog-detail');

Route::get('/contacto', function () {
    return view('contact');
})->name('contact');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/home', Home::class)->name('home');
    Route::get('/categorias', Categories::class)->name('categories');
    Route::get('/noticias', News::class)->name('news');
});

Route::get('json-tipo-cambio', [App\Http\Controllers\ChartController::class, 'json_tipo_cambio'])->name('tipo-cambio');
Route::get('json-inpc', [App\Http\Controllers\ChartController::class, 'json_inpc'])->name('inpc');
Route::get('json-udis', [App\Http\Controllers\ChartController::class, 'json_udis'])->name('udis');