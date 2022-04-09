<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\staffwage;
use App\Models\staffpayout;

class staff extends Model
{
    use HasFactory;
    protected $table = 'staffs';

    public function staffwages()
    {
        return $this->hasOne(staffwage::class);
    }

    public function staffpayout()
    {
        return $this->hasMany(staffpayout::class);
    }
}
