<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestType extends Model
{
   // use HasFactory;


    public function areaTypes()
    {
        return $this->belongsToMany(AreaType::class);
    }
}
