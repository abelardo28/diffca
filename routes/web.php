<?php

use App\Http\Livewire\Index;
use App\Http\Livewire\About;
use App\Http\Livewire\Services;
use App\Http\Livewire\Blog;
use App\Http\Livewire\BlogDetail;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Admin\Home\Home;
use App\Http\Livewire\Admin\Categories\Categories;
use App\Http\Livewire\Admin\News\News;
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

Route::get('/', Index::class)->name('index');

Route::get('/nosotros', About::class)->name('about');

Route::get('/servicios', Services::class)->name('services');

Route::get('/blog', Blog::class)->name('blog');

Route::get('/blog/{url}', BlogDetail::class)->name('blog-detail');

Route::get('/contacto', Contact::class)->name('contact');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/home', Home::class)->name('home');
    Route::get('/categorias', Categories::class)->name('categories');
    Route::get('/noticias', News::class)->name('news');
});

Route::get('json-tipo-cambio', [App\Http\Controllers\ChartController::class, 'json_tipo_cambio'])->name('tipo-cambio');
Route::get('json-inpc', [App\Http\Controllers\ChartController::class, 'json_inpc'])->name('inpc');
Route::get('json-udis', [App\Http\Controllers\ChartController::class, 'json_udis'])->name('udis');