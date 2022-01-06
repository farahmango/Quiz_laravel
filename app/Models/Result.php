<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_name',
        'answer1',
        'answer2',
        'answer3',
        'answer4',
        'answer5',
        'result',
    ];

}
