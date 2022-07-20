<?php
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 

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

Route::get('users', [UserController::class,'getusers']);
Route::get('add-user', [UserController::class,'createuser']);
Route::post('save-user', [UserController::class,'saveuser']);
Route::get('edit-user/{id}', [UserController::class,'edituser']);
Route::post('update-user', [UserController::class,'updateuser']);
Route::get('delete-user/{id}', [UserController::class,'deleteuser']);


Route::get('/install',function(){
    Artisan::call("migrate");
    Artisan::call("optimize");
    return redirect('/')->with('message',
    'App installed successfully!');

});