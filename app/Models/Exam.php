<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;


    protected $fillable = [
        'exam_title',
        'exam_desc',
        'exam_img',
    ];

    public function User(){
     return $this->belongsToMany(User::class);

       }
       public function Question(){
           return $this->hasMany(Question::class);
       }



}
