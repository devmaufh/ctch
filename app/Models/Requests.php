<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @property int $id
 * @property int $id_student
 * @property int $status
 * @property date $creation_date
 * @property int $id_process
 */

class Requests extends Model
{
    use HasFactory;
}
