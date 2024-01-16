<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'user_id',
        'learning_group_id',
        'subject_id',
        'title',
        'type',
        'message',
        'result',
        'time_start',
        'time_end',
    ];
}
