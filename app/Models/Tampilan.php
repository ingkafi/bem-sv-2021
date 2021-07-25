<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Tampilan extends Authenticatable
{
    protected $table = "tampilans";
    protected $fillable = [
        'background', 'header', 'slogan', 'judul_sambutan', 'hashtag', 'gambar_ketua', 'nama_ketua', 'keterangan_ketua',
        'gambar_wakil', 'nama_wakil', 'keterangan_wakil', 'judul_video', 'judul2_video', 'link_video', 'link_maps', 'keterangan_contact', 'contact'
    ];
}
