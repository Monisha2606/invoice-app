<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/invoice', [InvoiceController::class, 'create']);
Route::post('/invoice', [InvoiceController::class, 'store']);

