<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabinet extends Model
{
    protected $table = "kabinets";
    protected $fillable = ['nama', 'tahun','visibility','status','gambar'];
}
