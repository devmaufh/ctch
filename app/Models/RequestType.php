<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $id_student
 * @property int $status
 * @property date $creation_date
 * @property int $id_process
 */

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

