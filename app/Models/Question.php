<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';

    protected $fillable = [
        'post_id',
        'number',
        'question',
        'first_option',
        'second_option',
        'third_option',
        'fourth_option',
        'correct_option',
    ];
}
