<?php

use App\Models\Menu;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    $menu = Menu::all();
    return view('welcome', ['menu' => $menu]);
})->name('welcome');

Route::get('/admin', [MenuController::class, 'tampil'])->name('admin.tampil');

Route::get('/admin/tambah', [MenuController::class, 'tambah'])->name('admin.tambah');

Route::post('/admin/submit', [MenuController::class, 'submit'])->name('admin.submit');

Route::get('/admin/edit/{id}', [MenuController::class, 'edit'])->name('admin.edit');

Route::put('admin/update/{id}', [MenuController::class, 'update'])->name('admin.update');

Route::post('/admin/delete/{id}', [MenuController::class, 'delete'])->name('admin.delete');