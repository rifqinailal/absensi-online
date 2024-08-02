<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = ['id_user','tanggal','shift','absen'];

    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }
}
