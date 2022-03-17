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
                'created_at' => '2022-02-10 01:37:40',
                'updated_at' => '2022-02-08 01:37:42',
            ),
            1 => 
            array (
                'id' => 2,
                'course_id' => 3,
                'title' => 'Kiểm tra kiến thức lần 1 ',
                'description' => 'kiểm tra kiến thức tổng quan về hệ quản trị cơ sở dữ liệu',
                'number_of_questions' => 10,
                'created_at' => '2022-02-02 01:37:37',
                'updated_at' => '2022-02-11 01:37:44',
            ),
            2 => 
            array (
                'id' => 3,
                'course_id' => 3,
                'title' => 'Kiểm tra kiến thức lần 2 ',
                'description' => 'kiểm tra kiến thức về hệ quản trị cơ sở dữ liệu SQL server',
                'number_of_questions' => 10,
                'created_at' => '2022-02-24 01:37:35',
                'updated_at' => '2022-02-11 01:37:46',
            ),
            3 => 
            array (
                'id' => 4,
                'course_id' => 3,
                'title' => 'Kiểm tra kiến thức lần 3',
                'description' => 'kiểm tra tổng kết về hệ quản trị cơ sở dữ liệu',
                'number_of_questions' => 10,
                'created_at' => '2022-02-11 01:37:32',
                'updated_at' => '2022-02-10 01:37:48',
            ),
            4 => 
            array (
                'id' => 5,
                'course_id' => 3,
                'title' => 'Kiểm tra tổng hợp ',
                'description' => 'kiểm tra kiến thức tổng hợp về hệ quản trị cơ sở dữ liệu',
                'number_of_questions' => 10,
                'created_at' => '2022-02-17 01:37:27',
                'updated_at' => '2022-02-21 01:37:50',
            ),
            5 => 
            array (
                'id' => 6,
                'course_id' => 1,
                'title' => 'QTM hjsdjfkhasdf',
                'description' => 'asdgawegawge',
                'number_of_questions' => 10,
                'created_at' => '2022-02-22 19:17:00',
                'updated_at' => '2022-02-22 19:17:00',
            ),
            6 => 
            array (
                'id' => 8,
                'course_id' => 1,
                'title' => 'QTM hjsdjfkhasdf',
                'description' => 'asdgawegawge',
                'number_of_questions' => 10,
                'created_at' => '2022-02-22 19:19:42',
                'updated_at' => '2022-02-22 19:19:42',
            ),
            7 => 
            array (
                'id' => 9,
                'course_id' => 1,
                'title' => 'QTM hjsdjfkhasdf',
                'description' => 'asdgawegawge',
                'number_of_questions' => 10,
                'created_at' => '2022-02-22 19:20:13',
                'updated_at' => '2022-02-22 19:20:13',
            ),
            8 => 
            array (
                'id' => 14,
                'course_id' => 1,
                'title' => 'asdf',
                'description' => 'sdf',
                'number_of_questions' => 10,
                'created_at' => '2022-02-24 21:23:44',
                'updated_at' => '2022-02-24 21:23:44',
            ),
        ));
        
        
    }
}