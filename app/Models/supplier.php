<?php

namespace App\Models;
use App\Models\supplierspayout;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;


    public function supplierspayouts()
    {
        return $this->hasMany(supplierspayout::class);
    }
}
