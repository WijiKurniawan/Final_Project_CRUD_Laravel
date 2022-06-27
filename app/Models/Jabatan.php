<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $table = 'jabatan';
    protected $guarded = []; //boleh isi semua tidakk ada yg tidak boleh di isi (tidak ada yg dijaga)
}
