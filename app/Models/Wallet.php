<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    public function p_type()
    {
        return $this->belongsTo(PurchaseType::class, 'type');
    }
}
