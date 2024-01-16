<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLearningGroup extends Model
{
    use HasFactory;

    protected $table = 'user_learning_group';

    protected $fillable = [
        'user_id',
        'learning_group_id',
    ];
}
