<?php
use App\Http\Controllers\{ProductsController};
use Illuminate\Support\Facades\Route;


Route::get('/products', [ProductsController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
