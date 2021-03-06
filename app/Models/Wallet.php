<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    public function pr_type()
    {
        return $this->belongsTo(PurchaseType::class, 'p_type', 'id');
    }
}
