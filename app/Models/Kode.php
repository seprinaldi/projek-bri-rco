<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kode extends Model
{
    use HasFactory;

    protected $table = 'kode';
    protected $guarded = [];

    public function dibuatoleh()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
