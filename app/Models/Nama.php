<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nama extends Model
{
    public function nama()
    {
        return $this->belongsTo(App\Nama);
    }
}
