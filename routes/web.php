<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenerateController;

Route::get('/generate', GenerateController::class);
