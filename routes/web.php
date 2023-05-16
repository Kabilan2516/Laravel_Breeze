<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\ProfileController;
use Illuminate\Routing\ViewController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Route :: view('/','welcome');

Route::get('/insert_user',[CrudController::class,  'insert_form']);//just show the form
Route::post('/insert_user',[CrudController::class,'insert']);//insert data into the database
Route::get('/edit_users',[CrudController::class,'edit']);
Route::post('/edit_users',[CrudController::class,'update']);

Route::get('/view', [CrudController::class,'select'])->name('select');

Route::get('/insert_question',[CrudController::class,'question_form']);//just show the form
Route::post('/insert_question',[CrudController::class,'insert']);//insert data into the database
Route::get('edit_question',[CrudController::class,'edit']);
Route::post('/edit_question',[CrudController::class,'update']);

Route::get('/delete',[CrudController::class,'delete']);

