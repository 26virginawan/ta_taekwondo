<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KasKeluar extends Model
{
    public $timestamps = false;
    protected $table = 'kaskeluar';
    protected $fillable = ['id', 'tanggal', 'keterangan', 'jumlah'];
}
