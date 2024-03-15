<?php

namespace App\Models;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Materi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Absen extends Model
{
    use HasFactory;

    protected $table = 'absensi';
    protected $guarded = [];

    public function asisten()
    {
        return $this->belongsTo(User::class, 'id_asisten', 'id');
    }
    
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id');
    }
    
    public function materi()
    {
        return $this->belongsTo(Materi::class, 'id_materi', 'id');
    }
}
