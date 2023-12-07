<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TodoListController;
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
Route::get('/home', function(){
    return view('home');
});
// Route::controller('HomeController');
// Route::get('/home.index', [HomeController::class, 'index']);
// Route::any('contact-us', function(){
//     return view ('contact-us');
// });

Route::get('/', [TodoListController::class, 'index']);
Route::post('/saveItem',[TodoListController::class,'saveItem'])->name("saveItem");
Route::post('/markAsComplete/{id}', [TodoListController::class, 'markItem'])->name('markAsComplete');
