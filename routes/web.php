<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtusivuController;
use App\Http\Controllers\YhteystiedotController;

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

Route::view('/welcome', 'welcome');

Route::view('/', 'etusivu');
Route::get('/', [EtusivuController::class, 'index']);

Route::view('/yhteystiedot', 'yhteystiedot');
Route::get('/yhteystiedot', [YhteystiedotController::class, 'index']);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::view('/sisalto', 'sisalto')
    ->middleware(['auth', 'verified'])
    ->name('sisalto');

Route::view('/sisalto/etusivu', '/sisalto/etusivu')
    ->middleware(['auth', 'verified'])
    ->name('/sisalto/etusivu');

Route::view('/sisalto/yhteystiedot', '/sisalto/yhteystiedot')
    ->middleware(['auth', 'verified'])
    ->name('/sisalto/yhteystiedot');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
?>
