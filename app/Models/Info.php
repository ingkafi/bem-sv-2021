<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = "infos";
    protected $fillable = ['judul', 'isi', 'file_path','cp_nama','cp_line','cp_wa', 'created_by', 'updated_by'];
}
