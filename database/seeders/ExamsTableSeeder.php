<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('exams')->delete();

        \DB::table('exams')->insert(array (
            0 =>
            array (
                'id' => 1,
                'course_id' => 1,
                'title' => 'Bài kiểm tra lần 1',
                'description' => 'kiểm tra lần 1 tổng quan về Khoa học máy tính',
                'number_of_questions' => 10,

                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}
