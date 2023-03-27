<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "admin";
    protected $primaryKey = "id";
    protected $fillable = ['id','nama','alamat','tgllahir'];

    public function transaksis()
    {
        return $this->hasMany(App\Transaksis::class);
    }
}
