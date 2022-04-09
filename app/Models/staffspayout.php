<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class staffspayout extends Model
{
    use HasFactory;

    public function staff()
    {
        return $this->belongsTo(staff::class, 'staff_name');
    }
    public function wage()
    {
        return $this->belongsTo(staffwage::class, 'total_wage');
    }
}
