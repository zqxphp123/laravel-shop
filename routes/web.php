<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureTokenIsValid;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list', function () {
    return Response::json(['a' => 'b']);
});

Route::redirect('/cache','/list' );

//Route::get('/user/{name?}', function (Request $request,?string $name = null) {
//    return Response::json(['name' => $name]);
//})->where('name', '[A-Za-z]+');

Route::get('/index/{name?}', [UserController::class, 'index'])
    ->where('name', '[A-Za-z]+')
->middleware(EnsureTokenIsValid::class);

Route::get('/process', [UserController::class, 'process']);

Route::get('/user/list', [UserController::class, 'userlist']);

Route::get('/web/profile', function () {
    return Response::json(['a' => 'bb']);
})->middleware('role');


Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return Response::json(['name' => "vv"]);
    })->name('jj');
});

Route::get('/photo', function () {
    return response()->file(storage_path('app/public/1.png'));
});
