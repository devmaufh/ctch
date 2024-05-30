<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 *@property integer $id
 *@property varchar $nombre
 * @property varchar $codigo
 */

class permit extends Model
{
    use HasFactory;
}
