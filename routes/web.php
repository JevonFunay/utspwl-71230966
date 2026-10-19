<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SaleController;

Route::get('/', function () {
    return redirect('/mahasiswa');
});

Route::get('/mahasiswa', function (Request $request) {
    $nim = $request->input('nim');
    $nama = $request->input('nama');
    return view('mahasiswa', compact('nim', 'nama'));
});

Route::post('/mahasiswa', function (Request $request) {
    $nim = $request->input('nim');
    $nama = $request->input('nama');
    return view('mahasiswa', compact('nim', 'nama'));
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/students', function () {
    return view('students');
});

Route::get('/grades', function () {
    return view('grades');
});

Route::get('/assignments', function () {
    return view('assignments');
});

Route::get('/companies', [CompanyController::class, 'index']);
Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/items', [ItemController::class, 'index']);
Route::get('/sales', [SaleController::class, 'index']);
