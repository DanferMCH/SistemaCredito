<?php

use App\Http\Controllers\clientController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



//inicio sesion
Route::view("/",'login')->name('login');
Route::post("/usuario/auth" ,[UserController::class, 'auth'])-> name('user.auth');
Route::get("/usuario/create" ,[UserController::class, 'create'])-> name('user.create');
Route::get("/usuario/search/{id}" ,[UserController::class, 'search'])-> name('user.search');
Route::post("/usuario/store" ,[UserController::class, 'store'])-> name('user.store');
Route::post("/usuario/update" ,[UserController::class, 'update'])-> name('user.update');
Route::delete("/usuario/delete/{user}" ,[UserController::class, 'delete'])-> name('user.delete');

//menu principal
Route::get("/menu" ,[ClientController::class, 'principal'])-> name('principal');

// creacion de cliente 
Route::get("/cliente/create" ,[ClientController::class, 'create'])-> name('cliente.create');
Route::post("/cliente/store" ,[ClientController::class, 'store'])-> name('cliente.store');

//informacion cliente
Route::delete("/cliente/delete/{id}" ,[ClientController::class, 'delete'])-> name('cliente.delete');
Route::get("/cliente/edit/{id}" ,[ClientController::class, 'edit'])-> name('cliente.edit');
Route::post("/cliente/update" ,[ClientController::class, 'update'])-> name('cliente.update');

// informacion del credito
Route::post("cliente/updateAmortize", [clientController::class, 'updateAmortize'])->name('credito.amortizacion');
Route::post("cliente/increaseCredit", [clientController::class, 'increaseCredit'])->name('credito.aumentar');
Route::post("cliente/updateDate", [clientController::class, 'updateDate'])->name('credito.actualizarFecha');
Route::get("client/detail/{id}",[clientController::class, 'detailClient'])->name('cliente.detalle');

//historial pago
Route::get("client/historyCredit",[clientController::class, 'historyCredit'])->name('credito.history');