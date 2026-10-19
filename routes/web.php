<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::post('/mahasiswa', function (Request $request) {
    $nim = $request->input('nim');
    $nama = $request->input('nama');
    return view('mahasiswa', compact('nim', 'nama'));
});

Route::get('/layout', function () {
    return view('layout');
});