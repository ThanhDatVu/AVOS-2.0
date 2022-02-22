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

        \DB::table('results')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'user_id' => 13,
                    'exam_id' => 2,
                    'points' => 10.0,
                    'created_at' => '2022-02-20 19:15:55',
                    'updated_at' => '2022-02-21 20:39:37',
                ),
            1 =>
                array(
                    'id' => 3,
                    'user_id' => 13,
                    'exam_id' => 3,
                    'points' => 9.0,
                    'created_at' => '2022-02-21 20:49:56',
                    'updated_at' => '2022-02-21 20:50:43',
                ),
        ));


    }
}
