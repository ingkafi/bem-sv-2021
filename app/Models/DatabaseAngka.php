<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DatabaseAngka extends Model
{
    protected $table = "database_angkas";
    protected $fillable = ['prodi', 'mahasiswa', 'dosen', 'ukm', 'himpunan'];
}
