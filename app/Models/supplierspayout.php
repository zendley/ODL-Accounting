<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\supplier;

class supplierspayout extends Model
{
    use HasFactory;

    public function supplier()
    {
        return $this->belongsTo(supplier::class, 'supplier_name');
    }
    
}

