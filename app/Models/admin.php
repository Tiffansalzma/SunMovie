<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    protected $fillable = ['judul_film', 'genre', 'durasi', 'bioskop'];
    protected $table = 'admins';
    public $timestamps = false;
}