<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NoveltyController;
use App\Models\Ficha;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/login', [LoginController::class,'show'])->name('login')->middleware('guest');
// Route::post('/login', [LoginController::class,'login']);
// Route::view('/dashboard', 'auth.dashboard')->middleware('auth','admin');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/documento', [DocumentsController::class, 'docShow']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth','user-role:aprendiz'])->group(function(){
    Route::get("/aprendiz/home", [DashboardController::class, 'aprendizDashboard'])->name('home.apren');
    Route::get("/aprendiz/novedad", [NoveltyController::class, 'create'])->name('novedad.aprendiz');
    Route::post("/aprendiz/novedad", [NoveltyController::class, 'store']);
    Route::get("/aprendiz/configuracion", [DashboardController::class, 'config'])->name('config.aprendiz');
});
Route::middleware(['auth','user-role:instructor'])->group(function(){
    Route::get("/instructor/home", [DashboardController::class, 'instructorDashboard'])->name('home.inst');
    Route::get("/instructor/novedad", [NoveltyController::class, 'create'])->name('novedad.instructor');
    Route::post("/instructor/novedad", [NoveltyController::class, 'store']);
    Route::get("/instructor/fichas", [FichaController::class, 'index'])->name('fichas.instructor');
    Route::get("/instructor/fichas/{id}", [FichaController::class, 'showFicha']);
    Route::post("/instructor/llamadosdeatencion", [DocumentsController::class, 'store']);
    Route::get("/instructor/configuracion", [DashboardController::class, 'config'])->name('config.instructor');
});
Route::middleware(['auth','user-role:tecnico'])->group(function(){
    Route::get("/tecnico/home", [DashboardController::class, 'tecnicoDashboard'])->name('home.tecnico');
    Route::get("/tecnico/novedad", [NoveltyController::class, 'index'])->name('novedad.tecnico');
    Route::post("/tecnico/novedad", [NoveltyController::class, 'store']);
    Route::put("/tecnico/novedad", [NoveltyController::class, 'update'])->name('novedad.update');
    Route::get("/tecnico/configuracion", [DashboardController::class, 'config'])->name('config.tecnico');
});
Route::middleware(['auth','user-role:administrador'])->group(function(){
    Route::get("/home", [DashboardController::class, 'administradorDashboard'])->name('home.admin');
});

