<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @property int $id
 * @property int $request_log_id
 * @property int $user_id
 * @property date $creation_date
 * @property string $commit
 */

class Feedback extends Model
{
    use HasFactory;
}
