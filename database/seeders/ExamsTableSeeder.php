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
                'number_of_questions' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'course_id' => 3,
                'title' => 'Kiểm tra kiến thức lần 1 ',
                'description' => 'kiểm tra kiến thức tổng quan về hệ quản trị cơ sở dữ liệu',
                'number_of_questions' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'course_id' => 3,
                'title' => 'Kiểm tra kiến thức lần 2 ',
                'description' => 'kiểm tra kiến thức về hệ quản trị cơ sở dữ liệu SQL server',
                'number_of_questions' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'course_id' => 3,
                'title' => 'Kiểm tra kiến thức lần 3',
                'description' => 'kiểm tra tổng kết về hệ quản trị cơ sở dữ liệu',
                'number_of_questions' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'course_id' => 3,
                'title' => 'Kiểm tra tổng hợp ',
                'description' => 'kiểm tra kiến thức tổng hợp về hệ quản trị cơ sở dữ liệu',
                'number_of_questions' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}