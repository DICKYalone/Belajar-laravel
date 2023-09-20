<?php

use App\Http\Controllers\MainController;
use App\Models\Buku;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['client'])->group(function () {

    Route::get("user", function () {
        return [
            "user" => [
                "name" => "ilham",
                "alamat" => "JKT"
            ]
        ];
    });
});


Route::post("user", function (Request $request) {
    //middleware
    // return $request->header("x-data"); 

    // $fruits= ["apple", "grape"];
    // $fruits = [
    //     [
    //         "nama_buat" => "apple"
    //     ],
    //     [
    //         "nama_buah" => "grape"
    //     ]
    // ];

    try {
        Buku::create([
            "judul_buku" => $request->judul_buku,
            "harga" => $request->harga
        ]);

        return [
            "success" => true,
            "msg" => "data berhasil di input."
        ];
    } catch (\Throwable $th) {
        // return $th->getMessage();
        return response()->json([
            "success" => false,
            "msg" => "ada kesalahan input."
        ], 400);
    }
});
