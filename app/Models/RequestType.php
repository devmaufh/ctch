<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RequestType extends Model
{
//    use HasFactory;

    /**
     * Returns the area type relation.
     *
     * @return BelongsTo
     */
    public function areaType(): BelongsTo
    {
        return $this->belongsTo(AreaType::class);
    }

}
