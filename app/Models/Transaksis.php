<?php

namespace App\Models;
use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksis extends Model
{
    protected $table = "transaksis";
    protected $primaryKey = "id";
    protected $fillable = ['id','buku','jumlah','harga','total','tgl','nama_id'];


    public function petugas()
    {
        return $this->belongsTo(Admin::class,'nama_id','id');
    }

    //public function pembeli()
    //{
    //    return $this->belongsTo(App\Pembeli::class);
    //}
}
