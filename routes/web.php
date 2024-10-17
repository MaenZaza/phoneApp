<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/1', function () {
    return redirect()->route('phones.index'); // Redirect naar de telefoons lijst
});

Route::resource('/phones', PhoneController::class);

