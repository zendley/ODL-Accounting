<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\staff;
use App\Models\duration;

class staffwage extends Model
{
    use HasFactory;

    public function staff()
    {
        return $this->belongsTo(staff::class, 'staff_name');
    }
    public function durations()
    {
        return $this->belongsTo(duration::class, 'duration_id');
    }
    public function wage()
    {
        return $this->hasOne(staffspayout::class);
    }
}
