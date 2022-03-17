<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CourseUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('course_user')->delete();
        
        \DB::table('course_user')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 13,
                'course_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 14,
                'course_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}