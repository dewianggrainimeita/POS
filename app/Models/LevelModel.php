<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'm_level'; // Pastikan nama tabel di database sesuai
    protected $primaryKey = 'level_id';

    // Jika kamu ingin satu level memiliki banyak user
    public function users()
    {
        return $this->hasMany(UserModel::class, 'level_id', 'level_id');
    }
}