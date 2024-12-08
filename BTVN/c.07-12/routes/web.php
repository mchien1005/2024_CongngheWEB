<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
//use App\Http\Controllers\Controller;

//Route::get('/', [Controller::class, "index"]);
Route::get("/", [PostController::class, "index"]);



