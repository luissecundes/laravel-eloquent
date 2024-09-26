<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/select', function () {
$users = User::all();
dd($users);
});

Route::get('/', function () {
    return view('welcome');
});
