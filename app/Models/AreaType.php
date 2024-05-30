<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $code
 * @property int $id_usuario
 */
class AreaType extends Model
{
    protected $table = 'area_types';
    protected $fillable = ['name', 'code', 'id_usuario'];
    use HasFactory;

    /**
     * Returns the request types relation.
     *
     * @return HasMany
     */
    public function requestTypes(): HasMany
    {
        return $this->hasMany(RequestType::class);
    }

    /**
     * Return the user relation.
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
