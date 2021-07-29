<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrukturStat extends Model
{
    protected $table = "struktur_stats";
    protected $fillable = ['nama', 'jabatan','foto','kode_jabatan'];
}
