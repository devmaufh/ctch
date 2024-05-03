<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $name
 * @property string $code
 * @property int $id_usuario
 */
class AreaType extends Model
{
    protected $table = 'area_types';
    //protected $fillable = ['name', 'code', 'id_usuario'];
    use HasFactory;

    public function requestTypes (): HasMany
    {
        return $this->hasMany(RequestType::class);
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
