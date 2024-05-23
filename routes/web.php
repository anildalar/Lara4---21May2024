<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // resourcese/view/welcome.blade.php
});

Route::get('/another', function () {
    return view('welcome2'); // resourcese/view/welcome2.blade.php
});
Route::get('/another3', function () {
    return view('welcome3'); // resourcese/view/welcome3.blade.php
});
Route::get('/amazon', function () {
    return view('amazon'); // resourcese/view/amazon.blade.php
});
Route::get('/amazon2', function () {
    return view('amazon2'); // resourcese/view/amazon.blade.php
});


Route::get('/Crucial-T700-Gen5-NVMe-CT1000T700SSD3', function () {
    return view('detail'); // resourcese/view/detail.blade.php
});
