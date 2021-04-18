<?php

use App\Http\Controllers\MailsController;
use App\Http\Controllers\UploadFileController;
use Illuminate\Support\Facades\Route;

Route::post('/mail' ,[MailsController::class , 'send'])->name('add-post');

Route::get('locale/{locale}' ,[MailsController::class , 'locale'])->name('locale');



Route::middleware(['set_locale'])->group(function (){

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/more', function () {
        return view('more');
    });

    Route::get('/clothes', function () {
        return view('clothes');
    });
    Route::get('/products', [MailsController::class , 'index'])->name('home');

});
