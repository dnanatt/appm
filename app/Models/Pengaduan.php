<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class,'id_kategori','id');
    }

    public function gambar()
    {
        return $this->hasMany(Gambar::class,'id_gambar','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'id_user','id');
    }
}
