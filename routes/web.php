<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Http\Livewire\Blog;
use App\Http\Livewire\BlogDetail;
use App\Http\Livewire\Podcast;
use App\Http\Livewire\Lifestyle;
use App\Http\Livewire\Imprint;

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

Route::get('/', Home::class);
Route::get('/blog', Blog::class);
Route::get('/blog/{slug}', BlogDetail::class);
Route::get('/podcast', Podcast::class);
Route::get('/lifestyle', Lifestyle::class);
Route::get('/impressum', Imprint::class);
