<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::get('/userList', function (Request $request) {
    return Response::json(['name' => "ccccddd"]);
});

Route::post('/user', function (Request $request) {
    var_dump(1111);
    return Response::json(['created' => "ccccddd"]);
});
