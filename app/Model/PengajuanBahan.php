<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PengajuanBahan extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'IDPengajuanBahan';
    protected $fillable = ['IDUser', 'IDBahan', 'Jumlah', 'Status', 'ActionBy'];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'IDUser');
    }

    public function bahan()
    {
        return $this->hasOne(Bahan::class, 'IDBahan');
    }

    public function actionBy()
    {
        return $this->hasOne(User::class, 'id', 'ActionBy');
    }
}
