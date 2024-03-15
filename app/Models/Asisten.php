<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asisten extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $guarded = [];

     protected $fillable = [
        'id',
        'id_asisten',
        'role',
        'nama',
        'join_date',
        'email',
        'foto',
        'password',
    ];
    
}
