<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Buletin extends Model
{
    protected $table = "buletins";
    protected $fillable = ['judul', 'isi', 'link', 'gambar', 'status'];
}
