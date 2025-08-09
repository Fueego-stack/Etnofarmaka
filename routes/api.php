<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/check', function () {
    return response()->json(['message' => 'API aktif!']);
});
