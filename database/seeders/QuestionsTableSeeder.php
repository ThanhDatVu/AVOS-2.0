<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('questions')->delete();
        
        \DB::table('questions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_by' => 13,
                'question' => 'Thủ đô Mỹ?',
                'answerA' => 'DC',
                'answerB' => 'New York',
                'answerC' => 'Vegas',
                'answerD' => 'Vegas',
                'correctAnswer' => 'B',
                'hint' => NULL,
                'mark' => 1,
                'explanation' => NULL,
                'exam_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'created_by' => 13,
                'question' => 'Thủ đô Việt nam?',
                'answerA' => 'Hà Nội',
                'answerB' => 'Hà Tĩnh',
                'answerC' => 'Hà Nam',
                'answerD' => 'Hồ Chí Minh',
                'correctAnswer' => 'A',
                'hint' => NULL,
                'mark' => 1,
                'explanation' => NULL,
                'exam_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}