<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    use HasFactory;

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function p_type()
    {
        return $this->belongsTo(PurchaseType::class, 'type');
    }
}
