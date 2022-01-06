<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exams')->insert([
         [
        'id'=>'1',
        'exam_title'=>'HTML',
        'exam_desc'=>'HTML is a primary markup language for creating websites. Test your knowledge with this basic HTML quiz made especially for beginners',
        'exam_img'=>'html.jpg',
        ],

        [
        'id'=>'2',
        'exam_title'=>'JavaScript',
        'exam_desc'=>'JS is programming language that adds interactivity to your website. Test your knowledge with this basic JS quiz made especially for beginners',
        'exam_img'=>'js.png',
        ],

        [
        'id'=>'3',
        'exam_title'=>'CSS',
        'exam_desc'=>'CSS Add the style and graphics to your page to make it interactive.Test your knowledge with this basic CSS quiz made especially for beginners',
        'exam_img'=>'css.png',

        ],
    ]);
}



}
