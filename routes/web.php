<?php
use App\Http\Controllers\SeriesController;
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

// Route::get('/ola', function() {
//     echo 'Olá mundo!'; 
// });

Route::get('/series', [SeriesController::class, 'index']);
Route::get('/series/criar', [SeriesController::class, 'create']);