<?php


use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    return response()->view('install.index');
});