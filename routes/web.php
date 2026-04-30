<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AuthController; // Untuk Login
use App\Models\Project;

/*
|--------------------------------------------------------------------------
| 1. FRONTEND ROUTES (Halaman Publik)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('home', ["title" => "Home"]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Rahmad Alvian Andrianto",
        "kelas" => "Teknik Informatika"
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard', ["title" => "Dashboard Statistik"]);
});

Route::get('/projects', function () {
    $projects = Project::latest()->get();
    return view('projects', [
        "title" => "Projects",
        "projects" => $projects
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', ["title" => "Contact"]);
});

/*
|--------------------------------------------------------------------------
| 2. AUTH ROUTES (Login/Logout)
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| 3. BACKEND ROUTES (Sekarang jadi /admin)
|--------------------------------------------------------------------------
*/

// Middleware 'auth' biar orang asing kaga bisa masuk tanpa login
Route::middleware('auth')->prefix('admin')->group(function () {
    
    // Halaman Utama Dashboard Admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    
    // Manajemen CRUD Proyek (Pake Resource biar simpel)
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');

});