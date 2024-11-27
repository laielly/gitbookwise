<?php

use App\Http\Controllers\PaginasController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AddBookController;
use App\Http\Controllers\AddLeiturasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\SearchBookController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ReadingController;
use App\Http\Controllers\AssessmentController;

Route::get('/avaliar/{leitura_id}', [AssessmentController::class, 'create'])->name('avaliar');

Route::post('/avaliar', [AssessmentController::class, 'store'])->name('avaliacao.store');

Route::get('/estante', [ReadingController::class, 'listarLidas'])->name('estante');

Route::post('/leituras', [ReadingController::class, 'store'])->name('leituras.store')->middleware('auth');

Route::post('/buscarLivros', [SearchBookController::class, 'buscarLivros'])->name('buscarLivros');

// Rotas para o cadastro de livros
Route::post('/livros', [AddBookController::class, 'store'])->name('livros.store');

// Rotas para perfil
Route::get('/profile', [PaginasController::class, 'profile'])->name('profile');


Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

// Rotas para comentários e curtidas
Route::post('/like', [LikeController::class, 'store'])->name('like.store');

// Rotas para o feed
Route::get('/feed', [PostController::class, 'index'])->middleware(['auth:sanctum', 'verified'])->name('feed');


// Rotas principais
Route::get('/', [PaginasController::class, 'index'])->name('index'); // Rota para a página inicial
Route::get('/search', [PostController::class, 'search'])->name('search'); // Rota de pesquisa
Route::get('/register', [PaginasController::class, 'register'])->name('register');
Route::post('/register', [RegistroController::class, 'store'])->name('register');
Route::get('/login', [PaginasController::class, 'login'])->name('login');


Route::post('/login', [LoginController::class, 'login'])->name('login');

// Rotas para páginas específicas
Route::get('/addbook', [PaginasController::class, 'addbook'])->name('addbook');
Route::get('/blog-single', [PaginasController::class, 'blogSingle'])->name('blog-single'); // Corrigido para padrão camel case
Route::get('/comentarios', [PaginasController::class, 'comentarios'])->name('comentarios');

