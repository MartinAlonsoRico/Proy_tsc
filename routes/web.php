<?php
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Route;
use App\Models\Carga;
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

Route::Resource('cargas','App\Http\Controllers\CargaController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::resource('registros', App\Http\Controllers\RegistroController::class);

