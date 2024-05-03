<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @property int $id
 * @property string $name
 * @property string $code
 * @property int|null $expiration
 */
class DocumentType extends Model
{
    use HasFactory;
}
