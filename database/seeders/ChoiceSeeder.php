<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('choices')->insert([
        //    html
        [
        'question_id'=>'1',
        'id'=>'1',
        'choice'=>'Hypertext Machine language',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'1',
        'id'=>'2',
        'choice'=>'Hypertext and links markup language',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'1',
        'id'=>'3',
        'choice'=>'Hypertext Markup Language',
        'answer_status'=>'true',
        ],
        [
        'question_id'=>'1',
        'id'=>'4',
        'choice'=>'Hightext Machine Language',
        'answer_status'=>'false',
        ],

        [
        'question_id'=>'2',
        'id'=>'5',
        'choice'=>'link',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'2',
        'id'=>'6',
        'choice'=>'ref',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'2',
        'id'=>'7',
        'choice'=>'href',
        'answer_status'=>'true',
        ],
        [
        'question_id'=>'2',
        'id'=>'8',
        'choice'=>'newref',
        'answer_status'=>'false',
        ],

        [
        'question_id'=>'3',
        'id'=>'9',
        'choice'=>'For creating Different styles',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'3',
        'id'=>'10',
        'choice'=>'For creating different sections',
        'answer_status'=>'true',
        ],
        [
        'question_id'=>'3',
        'id'=>'11',
        'choice'=>'For adding headings',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'3',
        'id'=>'12',
        'choice'=>'For adding titles',
        'answer_status'=>'false',
        ],

        [
        'question_id'=>'4',
        'id'=>'13',
        'choice'=>'tab',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'4',
        'id'=>'14',
        'choice'=>'href',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'4',
        'id'=>'15',
        'choice'=>'target',
        'answer_status'=>'true',
        ],
        [
        'question_id'=>'4',
        'id'=>'16',
        'choice'=>'ref',
        'answer_status'=>'false',
        ],

        [
        'question_id'=>'5',
        'id'=>'17',
        'choice'=>'<theader>',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'5',
        'id'=>'18',
        'choice'=>'<h1>',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'5',
        'id'=>'19',
        'choice'=>'<th>',
        'answer_status'=>'true',
        ],
        [
        'question_id'=>'5',
        'id'=>'20',
        'choice'=>'<header>',
        'answer_status'=>'false',
        ],
//   java script
        [
        'question_id'=>'6',
        'id'=>'21',
        'choice'=>'toSource()',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'6',
        'id'=>'22',
        'choice'=>'sort',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'6',
        'id'=>'23',
        'choice'=>'splice()',
        'answer_status'=>'true',
        ],
        [
        'question_id'=>'6',
        'id'=>'24',
        'choice'=>'unshift()',
        'answer_status'=>'false',
        ],

        [
        'question_id'=>'7',
        'id'=>'25',
        'choice'=>'characterAt()',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'7',
        'id'=>'26',
        'choice'=>'getCharAt()',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'7',
        'id'=>'27',
        'choice'=>'charAt()',
        'answer_status'=>'true',
        ],
        [
        'question_id'=>'7',
        'id'=>'28',
        'choice'=>'None of the above',
        'answer_status'=>'false',
        ],

        [
        'question_id'=>'8',
        'id'=>'29',
        'choice'=>'toLowerCase()',
        'answer_status'=>'true',
        ],
        [
        'question_id'=>'8',
        'id'=>'30',
        'choice'=>'toLower()',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'8',
        'id'=>'31',
        'choice'=>'changeCase(case)',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'8',
        'id'=>'32',
        'choice'=>'None of the above',
        'answer_status'=>'false',
        ],

        [
        'question_id'=>'9',
        'id'=>'33',
        'choice'=>'toString()',
        'answer_status'=>'true',
        ],
        [
        'question_id'=>'9',
        'id'=>'34',
        'choice'=>'toFixed()',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'9',
        'id'=>'35',
        'choice'=>'toLocaleString()',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'9',
        'id'=>'36',
        'choice'=>'toPrecision()',
        'answer_status'=>'false',
        ],

        [
        'question_id'=>'10',
        'id'=>'37',
        'choice'=>'concat()',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'10',
        'id'=>'38',
        'choice'=>'match()',
        'answer_status'=>'true',
        ],
        [
        'question_id'=>'10',
        'id'=>'39',
        'choice'=>'search()',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'10',
        'id'=>'40',
        'choice'=>'replace()',
        'answer_status'=>'false',
        ],
        // css

        [
        'question_id'=>'11',
        'id'=>'41',
        'choice'=>'The Type Selector',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'11',
        'id'=>'42',
        'choice'=>'The Universal Selector',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'11',
        'id'=>'43',
        'choice'=>'The Descendant Selector',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'11',
        'id'=>'44',
        'choice'=>'The Class Selector',
        'answer_status'=>'true',
        ],

        [
        'question_id'=>'12',
        'id'=>'45',
        'choice'=>'%',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'12',
        'id'=>'46',
        'choice'=>'cm',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'12',
        'id'=>'47',
        'choice'=>'em',
        'answer_status'=>'true',
        ],
        [
        'question_id'=>'12',
        'id'=>'48',
        'choice'=>'ex',
        'answer_status'=>'false',
        ],

        [
        'question_id'=>'13',
        'id'=>'49',
        'choice'=>'margin',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'13',
        'id'=>'50',
        'choice'=>'margin-bottom',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'13',
        'id'=>'51',
        'choice'=>'margin-top',
        'answer_status'=>'true',
        ],
        [
        'question_id'=>'13',
        'id'=>'52',
        'choice'=>'margin-up',
        'answer_status'=>'false',
        ],

        [
        'question_id'=>'14',
        'id'=>'53',
        'choice'=>'background-color',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'14',
        'id'=>'54',
        'choice'=>'background-image',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'14',
        'id'=>'55',
        'choice'=>'background-repeat',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'14',
        'id'=>'56',
        'choice'=>'background-position',
        'answer_status'=>'true',
        ],

        [
        'question_id'=>'15',
        'id'=>'57',
        'choice'=>'font-family',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'15',
        'id'=>'58',
        'choice'=>'font-style',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'15',
        'id'=>'59',
        'choice'=>'font-variant',
        'answer_status'=>'false',
        ],
        [
        'question_id'=>'15',
        'id'=>'60',
        'choice'=>'font-weight',
        'answer_status'=>'true',
        ],
       ]);
    }
}
