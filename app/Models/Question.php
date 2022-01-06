<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'question',
        'exam_id',

    ];

    public function Exam(){
        return $this->belongsTo(Exam::class);
    }

    public function Choice(){
        return $this->hasMany(Choice::class);
    }
}
