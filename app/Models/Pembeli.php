<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table = "pembeli";
    protected $primaryKey = "id";
    protected $fillable = ['id','nama','alamat','tgllahir'];

    public function transaksi()
    {
        return $this->hasMany(App\Transaksis::class);
    }

}
