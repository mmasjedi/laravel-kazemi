<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainController;
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

// Route::get('/train', function () {
//     $pizza=[
//         "type" => "special",
//         "khamir" => "thin",
//         "price" => 15
//     ];
//     return view('train',$pizza);
// });


Route::get('/train', [TrainController::class, 'index']);
Route::get('/train/{id}', [TrainController::class, 'show']);


