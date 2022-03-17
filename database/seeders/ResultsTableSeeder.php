<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ResultsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('results')->delete();
        
        \DB::table('results')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 13,
                'exam_id' => 2,
                'points' => 10.0,
                'created_at' => '2022-02-20 19:15:55',
                'updated_at' => '2022-02-21 20:39:37',
            ),
            1 => 
            array (
                'id' => 3,
                'user_id' => 13,
                'exam_id' => 3,
                'points' => 9.0,
                'created_at' => '2022-02-21 20:49:56',
                'updated_at' => '2022-02-21 20:50:43',
            ),
            2 => 
            array (
                'id' => 4,
                'user_id' => 13,
                'exam_id' => 1,
                'points' => 2.0,
                'created_at' => '2022-02-24 21:34:29',
                'updated_at' => '2022-02-24 21:34:29',
            ),
            3 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'exam_id' => 2,
                'points' => 6.0,
                'created_at' => '2022-02-03 18:45:15',
                'updated_at' => '2022-02-08 18:45:22',
            ),
            4 => 
            array (
                'id' => 6,
                'user_id' => 2,
                'exam_id' => 2,
                'points' => 8.0,
                'created_at' => '2022-02-17 18:45:25',
                'updated_at' => '2022-02-01 18:45:30',
            ),
        ));
        
        
    }
}