<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request_Type extends Model
{
    use HasFactory;
    public function areaTye(): BelongsTo{
        return $this->belongsTo(AreaType::class);
    }
}