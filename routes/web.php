<?php


//use Illuminate\Support\Facades\Route;

// use Illuminate\Contracts\Container;

// use App\Http\Controllers\WelcomeController;

// Route::get('/', [WelcomeController::class, 'index']);

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

// Route::get('/', function () {
//     // return view('welcome');
//     return 'HELLO, World!';
// });
// use App\Models\Greeting;
// // use App\Models\Project;
// Route::get('create-greeting', function(){
//     $greeting = new Greeting();
//     $greeting->body = 'Hello, World';
//     $greeting->save();
// });

// Route::get('first-greeting', function(){
//     return Greeting::first()->body;
// });

// // Route::get('/projects', 'ProjectController@index');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
// Route::get('/',function(){
//     $books = [
//         'harry poter',
//         'laravel'
//     ];
//     return view('welcome', [
//         'books' => $books
//     ]);
// });

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
// use App\Http\Controllers;
//이거안됨
 //Route::get('/', 'HomeController@index');

 Route::get('/', [HomeController::class, 'index']);

Route::get('/hello','App\Http\Controllers\HomeController@hello');

Route::get('/contact',[HomeController::class, 'contact']);

Route::get('/projects',[ProjectController::class, 'index']);