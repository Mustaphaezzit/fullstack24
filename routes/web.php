<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Auth::routes();


Route::controller(ContactController::class)->group(function(){
    Route::get("/contacts","index")->name("contacts.index");
    Route::get("/contacts/create","create")->name("contacts.create");
    Route::post("/contacts","store")->name("contacts.store");
    Route::get("/contacts/{contact}","show")->name("contacts.show");
    Route::get("/contacts/{contact}/edit","edit")->name("contacts.edit");
    Route::put("/contacts/{contact}","update")->name("contacts.update");
    Route::delete("/contacts/{contact}","destroy")->name("contacts.destroy");
});
