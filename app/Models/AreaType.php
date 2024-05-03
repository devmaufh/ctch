<?php

namespace App\Models;

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

    /**
     *retunr the request types relation.
     *
     *@return HasMany
     */
    public function requestTypes():HasMany
    {
        return $this->hasMany(RequestType::class);
    }
    public  function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
