<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proker extends Model
{
    protected $table = "prokers";
    protected $fillable = ['proker', 'keterangan', 'bidang', 'gambar'];
}
