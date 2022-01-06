<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
         [
        'exam_id'=>'1',
        'id'=>'1',
        'question'=>'Q1. What does HTML stand for?',
        ],
        [
        'exam_id'=>'1',
        'id'=>'2',
        'question'=>'Q2. Which of the following attributes is used to add link to any element?',
        ],
        [
        'exam_id'=>'1',
        'id'=>'3',
        'question'=>'Q3. What is the purpose of using div tags in HTML?',
        ],
        [
        'exam_id'=>'1',
        'id'=>'4',
        'question'=>'Q4. Which of the following attributes is used to open an hyperlink in new tab?',
        ],
        [
        'exam_id'=>'1',
        'id'=>'5',
        'question'=>'Q5. which tag is used to add an header in HTML5 table?',
        ],
        [
        'exam_id'=>'2',
        'id'=>'6',
        'question'=>'Q1. Which of the following function of Array object adds and/or removes elements from an array?',
        ],
        [
        'exam_id'=>'2',
        'id'=>'7',
        'question'=>'Q2. Which built-in method returns the character at the specified index?',
        ],
        [
        'exam_id'=>'2',
        'id'=>'8',
        'question'=>'Q3. Which built-in method returns the calling string value converted to lower case?',
        ],
        [
        'exam_id'=>'2',
        'id'=>'9',
        'question'=>'Q4. Which of the following function of Number object returns a string value version of the current number?',
        ],
        [
        'exam_id'=>'2',
        'id'=>'10',
        'question'=>'Q5. Which of the following function of String object is used to match a regular expression against a string?',
        ],
        [
        'exam_id'=>'3',
        'id'=>'11',
        'question'=>'Q1. Which of the following selector matches a element based on its class attribute?',
        ],
        [
        'exam_id'=>'3',
        'id'=>'12',
        'question'=>'Q2. Which of the following defines a relative measurement for the height of a font in em spaces?',
        ],
        [
        'exam_id'=>'3',
        'id'=>'13',
        'question'=>'Q3. Which of the following property specifies the top margin of an element?',
        ],
        [
        'exam_id'=>'3',
        'id'=>'14',
        'question'=>'Q4. Which of the following property is used to control the position of an image in the background?',
        ],
        [
        'exam_id'=>'3',
        'id'=>'15',
        'question'=>'Q5. Which of the following property is used to increase or decrease how bold or light a font appears?',
        ],

        ]);
        }
    }
