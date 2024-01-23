<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningGroup extends Model
{
    use HasFactory;

    protected $table = 'learning_groups';

    protected $fillable = [
        'grade',
        'major_id',
        'serial',
    ];
}
