<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningGroupSubject extends Model
{
    use HasFactory;

    protected $table = 'learning_group_subjects';

    protected $fillable = [
        'learning_group_id',
        'subject_id',
    ];
}
