<?php

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

// // Supported Routes
// Route::get();
// Route::post();
// Route::put();
// Route::patch();
// Route::delete();

// Route::match(['get', 'post'], '/', function () {
//     return 'Get and Post';
// });

// Route::any('/test', function () {
//     return view('test');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'index']); // calling index from user controller

// Route::get('/user', [UserController::class, 'index'])->name('login'); // authentication

Route::get('/user/{id}', [UserController::class, 'show']);

// Route::get('/user/{id}', [UserController::class, 'show'])->middleware(('auth')); // authentication

// Route::get('/test', function () {
//     return view('test'); // returning view
// });

// Route::get('/get-data', function () {
//     return response('Test Data', 200)
//         ->header('Content-type', 'text/plain');
// }); // response text with data

// Route::get('/get-json', function () {
//     return response()->json(['name' => 'Joshua', 'age' => 22]);
// }); //returning json with data

// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return response($id . ' ' . $name, 200);
// }); // getting url paramaters

// Route::get('/downloading-file', function () {
//     $path = public_path() . '/sample-download.txt';
//     $name = 'sample-download.txt';
//     $headers = array(
//         'Content-type : appplication/text-plain',
//     );
//     return response()->download($path, $name, $headers);
// }); // response and automatically download


// Route::redirect('/test', '/'); // this will redirect /test to homepage, note declare after the other route