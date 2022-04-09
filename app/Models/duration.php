<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\staffwage;

class duration extends Model
{
    use HasFactory;

    public function staffduration()
    {
        return $this->hasMany(staffwage::class);
    }
}
