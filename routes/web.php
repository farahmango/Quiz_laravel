<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ChoiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultController;


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


// home page
Route::get('/',[ExamController::class,'site']);
// dashboard
Route::resource('/exam',ExamController::class);
Route::resource('/user',UserController::class);
Route::resource('/question',QuestionController::class);
Route::resource('/choice',ChoiceController::class);
Route::resource('/result',ResultController::class);
// auth
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', function () {
      return view('admin.user');
    });
  });

