<?php

use App\Http\Middleware\CheckSession;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::middleware(CheckSession::class)->group(function () {
    Route::get('/', function () {
        return view('main');
    });

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/form', function () {
        return view('admin.form');
    });

    Route::get('/action', function () {
        return view('admin.action');
    });

    Route::get('/logout', function () {
        Session::forget('user_name');
        return redirect('/');
    });
});
