<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Database extends Model
{
    protected $table = "databases";
    protected $fillable = ['judul', 'link'];
}
