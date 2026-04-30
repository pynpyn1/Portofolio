<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // Mengizinkan semua kolom diisi, kecuali 'id' (Membuka gembok Mass Assignment)
    protected $guarded = ['id'];

    // Memberi tahu Laravel bahwa tech_stack disimpan sebagai JSON/Array
    protected $casts = [
        'tech_stack' => 'array',
    ];
}