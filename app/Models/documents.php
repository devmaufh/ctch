<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $student_id
 * @property int $document_type_id
 * @property datetime $Creation_date
 * @property string $path
 */
class documents extends Model
{
    use HasFactory;
}
