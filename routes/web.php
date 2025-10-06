<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CatalogoController;

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\UserController;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rota simplificada
// Route::get('/', [HomeController::class, 'index'])->name('home.index');
// Route::get('/autor/create', [AutorController::class, 'create'])->name('autor.create');
// Route::post('/autor/store', [AutorController::class, 'store'])->name('autor.store');
// Route::get('autor/{id}/edit', [AutorController::class, 'edit'])->where('id', '[0-9]+')->name('autor.edit');
// Route::put('autor/{id}', [AutorController::class, 'update'])->where('id', '[0-9]+')->name('autor.update');
// Route::delete('autor/{id}', [AutorController::class, 'destroy'])->where('id', '[0-9]+')->name('autor.destroy');

// Route::get('/livro/create', [LivroController::class, 'create'])->name('livro.create');
// Route::post('/livro/store', [LivroController::class, 'store'])->name('livro.store');
// Route::get('livro/{id}/edit', [LivroController::class, 'edit'])->where('id', '[0-9]+')->name('livro.edit');
// Route::put('livro/{id}', [LivroController::class, 'update'])->where('id', '[0-9]+')->name('livro.update');
// Route::delete('livro/{id}', [LivroController::class, 'destroy'])->where('id', '[0-9]+')->name('livro.destroy');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/search', function () {
    return view('search');
})->middleware(['auth', 'verified'])->name('search');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// rotas temporarias de usario e admin
Route::get('biblioteca/admin/home', [AdminController::class, 'index'])
->middleware(['auth', 'admin'])->name('admin.index');
Route::get('biblioteca/user/home', [UserController::class, 'index'])
->middleware(['auth', 'user'])->name('user.index');

//
Route::prefix('biblioteca')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/autor/create', [AutorController::class, 'create'])->name('autor.create');
    Route::post('/autor/store', [AutorController::class, 'store'])->name('autor.store');
    Route::get('autor/{id}/edit', [AutorController::class, 'edit'])->where('id', '[0-9]+')->name('autor.edit');
    Route::put('autor/{id}', [AutorController::class, 'update'])->where('id', '[0-9]+')->name('autor.update');
    Route::delete('autor/{id}', [AutorController::class, 'destroy'])->where('id', '[0-9]+')->name('autor.destroy');

    Route::get('/livro/create', [LivroController::class, 'create'])->name('livro.create');
    Route::post('/livro/store', [LivroController::class, 'store'])->name('livro.store');
    Route::get('livro/{id}/edit', [LivroController::class, 'edit'])->where('id', '[0-9]+')->name('livro.edit');
    Route::put('livro/{id}', [LivroController::class, 'update'])->where('id', '[0-9]+')->name('livro.update');
    Route::delete('livro/{id}', [LivroController::class, 'destroy'])->where('id', '[0-9]+')->name('livro.destroy');

    Route::get('/catalogo', [CatalogoController::class, 'create'])->name('catalogo.create');

    // Route::get('/login', [LoginController::class, 'create'])->name('login.create');

    // Route::get('/cadastro', [CadastroController::class, 'create'])->name('cadastro.create');
});

Route::get('/search', [LivroController::class, 'search'])->name('livro.search');

require __DIR__.'/auth.php';
