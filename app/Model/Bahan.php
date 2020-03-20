<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bahan extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'IDBahan';
    protected $fillable = ['Kode', 'Nama', 'Jenis', 'TempatPenyimpanan', 'Jumlah', 'Harga', 'Satuan'];
}
