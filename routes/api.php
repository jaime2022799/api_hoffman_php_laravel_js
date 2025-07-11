<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\resource\views\formularioApi;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/formularioApi', function() {


    [UsersController::class, 'store'];
    [UsersController::class, 'index'];
    [UsersController::class, 'show'];

    return view('formularioApi');
});

Route::get('/ModalTableUser', function() {
    return view('ModalTableUser');
});

Route::get('/ModalGetUser', function() {
    return view('ModalGetUser');
});

Route::get('GetUsers/{Code}', [UsersController::class, 'show']);

Route::post('/listTableUsers', [UsersController::class, 'store']);

Route::get('/listTableUsers', [UsersController::class, 'index']);

Route::post('/sendUsers', function () {

     [UsersController::class, 'store'];

});