<?php

use App\Http\Controllers\usersController;
use App\Http\Controllers\quizsController;
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

Route::get('/', [quizsController::class, 'questions'])->name('quizs.questions');
Route::get('quizs/{id}', [quizsController::class, 'quizs'])->name('quizs.edits');
Route::get('quizs/quizAndQuestions/{id}', [quizsController::class, 'quizAndQuestions'])->name('quizs.quiz_and_questions');

Route::get('quizs/create', [quizsController::class, 'create'])->name('quizs.editpage');
Route::get('quizs/private', [quizsController::class, 'private_questions'])->name('quizs.private_questions');
Route::get('quizs/del/{del}', [quizsController::class, 'delete'])->name('quizs.del');
Route::prefix('admin')->get('adminquestions', [quizsController::class, 'adminquestions'])->name('admin.questions');
Route::prefix('admin')->get('adminquizs', [quizsController::class, 'adminquizs'])->name('admin.quizs');
Route::middleware('auth')->group(function () {
    Route::get('logout', [ProfileController::class, 'logout'])->name('logout');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';