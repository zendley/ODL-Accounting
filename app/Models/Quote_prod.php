<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote_prod extends Model
{
    use HasFactory;

    public function prod()
    {
        return $this->hasone(Quote_prod::class, 'quote_id');
    }
}
