<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkHasTag extends Model
{
    protected $table = 'works_has_tags';
    use HasFactory;
}
