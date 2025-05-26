<?php

use App\Http\Controllers\EmployeController;
use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get("/",[EmployeController::class,"index"]);
route::get("/create",[EmployeController::class,"create"]);
route::get("/edit/{id}",[EmployeController::class,"edit"]);
route::post("/store",[EmployeController::class,"store"]);
route::put("/update/{id}",[EmployeController::class,"update"]);
route::get("/delete/{id}",[EmployeController::class,"destory"]);