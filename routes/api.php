<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ProjectController;

Route::get('/Project-index' , [ProjectController::class, 'ProjectIndex']);


// Route :: prefix('v1') -> group(function() {})