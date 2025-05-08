<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;

Route::resource('kategoris', KategoriController::class);