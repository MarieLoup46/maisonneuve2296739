<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

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

// En lien avec la fonction index() du controller EtudiantController.php
Route::get('/etudiant', [EtudiantController::class, 'index'])->name('etudiant.index');

// En lien avec la fonction show() du controller EtudiantController.php
// Le get attend un paramètre qui est l'id d'un étudiant et qui provient de l'index
Route::get('/etudiant/{etudiantId}', [EtudiantController::class, 'show'])->name('etudiant.show');

// En lien avec la fonction create() du controller EtudiantController.php
Route::get('/etudiant-create', [EtudiantController::class, 'create'])->name('etudiant.create');

// En lien avec la fonction store() du controller EtudiantController.php
// post - création (insertion)
Route::post('/etudiant-create', [EtudiantController::class, 'store']);

// En lien avec la fonction edit() du controller Etudiant.php
// Attend en paramètre l'id de l'étudiant
Route::get('/etudiant-edit/{etudiantId}', [EtudiantController::class, 'edit'])->name('etudiant.edit');

// En lien avec la fonction update() du controller EtudiantController.php
Route::put('/etudiant-edit/{etudiantId}', [EtudiantController::class, 'update']);

// En lien avec la fonction destroy() du controller EtudiantController.php
Route::delete('/etudiant-edit/{etudiantId}', [EtudiantController::class, 'destroy'])->name('etudiant.delete');
