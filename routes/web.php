<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\ContactController;

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

Route::view('/', 'frontPage');
Route::get('/', [FrontPageController::class, 'index'])
    ->name('etusivu');

Route::view('/yhteystiedot', 'contact');
Route::get('/yhteystiedot', [ContactController::class, 'index']);

Route::view('dashboard', '/admin/dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('tuotteet', '/admin/products')
    ->middleware(['auth', 'verified'])
    ->name('tuotteet');

Route::view('media', '/admin/media')
    ->middleware(['auth', 'verified'])
    ->name('media');


Route::redirect('/sisalto', '/admin/content/frontPage', 301)
    ->middleware(['auth', 'verified'])
    ->name('sisalto');

Route::view('/sisalto/etusivu', '/admin/content/frontPage')
    ->middleware(['auth', 'verified'])
    ->name('sisalto.etusivu');

Route::view('/sisalto/yhteystiedot', '/admin/content/contact')
    ->middleware(['auth', 'verified'])
    ->name('/sisalto/yhteystiedot');

Route::view('profile', '/admin/profile')
    ->middleware(['auth'])
    ->name('profile');


require __DIR__.'/auth.php';
?>
