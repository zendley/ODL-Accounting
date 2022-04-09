<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoices_prod extends Model
{
    use HasFactory;

    public function prod()
    {
        return $this->hasone(invoices_prod::class, 'invoice_id');
    }
}
