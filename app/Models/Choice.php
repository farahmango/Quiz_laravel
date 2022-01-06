<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    use HasFactory;
    protected $fillable = [
        'question_id',
        'choice',
        'answer_status',
    ];


    public function Question(){
     return $this->belongsTo(Question::class);
    }


    }

