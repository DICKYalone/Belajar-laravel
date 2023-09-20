<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


// Route::get("buku", [BukuController::class, 'index']);
// Route::post("buku", [BukuController::class, 'store']);
// Route::get("buku/{id}", [BukuController::class, "show"]);
// Route::put("buku/{id}", [BukuController::class, "update"]);
// Route::delete("buku/{id}", [BukuController::class, "destroy"]);

Route::resource("buku", BukuController::class)->except(["create", "edit"]);

Route::prefix("user")->group(function () {
    Route::get("info", function () {
        return "info user";
    })->middleware(['auth']);
});

// auth
Route::get("/", [MainController::class, "index"])->middleware(["auth", "role"]);

Route::get("/login", function () {
    return view("login");
})->name("login");

Route::post("login", [MainController::class, "authenticate"]);
Route::get("logout", [MainController::class, "logout"])->middleware(["auth"]);

// method('update','delete')

// 'any routing type' prefix, middleware (custom middleware), controller


// route api web (+new routing)

// validation ($request)

// custom service

// session

// upload file ()

// cache (mempercepat pengambilan data)

// email -> kirim

// data manipulation collection, helpers

// ORM (data relation)

// 