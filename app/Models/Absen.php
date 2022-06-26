<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;
    protected $table = 'absen';
    protected $guarded = []; //boleh isi semua tidakk ada yg tidak boleh di isi (tidak ada yg dijaga)
}

