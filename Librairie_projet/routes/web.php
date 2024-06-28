<?php

use App\Http\Controllers\AchatController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\LigneCommandeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("welcome");
});



Route::get('employers',[EmployerController::class,"index"])->name("employers.index");
Route::get('employers/create',[EmployerController::class,"create"])->name("employers.create");
Route::post('employers/store',[EmployerController::class,'store'])->name("employers.store");
Route::get('employers/{employer}',[EmployerController::class,"show"])->name("employers.show");
Route::get('employers/{employer}/edit',[EmployerController::class,"edit"])->name("employers.edit");
Route::put('employers/{employer}',[EmployerController::class,"update"])->name("employers.update");
Route::delete('employers/{employer}',[EmployerController::class,"destroy"])->name("employers.destroy");


Route::get('achats',[AchatController::class,"index"])->name("achats.index");
Route::get('achats/create',[AchatController::class,"create"])->name("achats.create");
Route::post('achats/store',[AchatController::class,'store'])->name("achats.store");
Route::get('achats/{achat}',[AchatController::class,"show"])->name("achats.show");
Route::get('achats/{achat}/edit',[AchatController::class,"edit"])->name("achats.edit");
Route::put('achats/{achat}',[AchatController::class,"update"])->name("achats.update");
Route::delete('achats/{achat}',[AchatController::class,"destroy"])->name("achats.destroy");
