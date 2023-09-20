<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = ["judul_buku", "harga"];
    // protected $guarded = [];

    protected $table = "buku";
}
