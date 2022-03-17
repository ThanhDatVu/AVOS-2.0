<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('courses')->delete();
        
        \DB::table('courses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'teacher_id' => 1,
                'title' => 'Demo',
                'descriptif' => 'Cung cấp kiến thức cơ bản về Computer Science',
                'objectif' => 'Cung cấp kiến thức cơ bản về Khoa học máy tính ',
                'competences_requises' => 'bùm',
                'niveau_de_difficulte' => 1,
                'image' => 'courses/8EDd8xlfWOhjubt9QAVuLSwNqDm4fpOehlKJYDA3.jpg',
                'category' => 'AT15',
                'created_at' => '2022-02-08 18:57:38',
                'updated_at' => '2022-02-08 18:57:38',
            ),
            1 => 
            array (
                'id' => 3,
                'teacher_id' => 1,
                'title' => 'Hệ quản trị cơ sở dữ liệu',
                'descriptif' => 'Khoá học này cung cấp kiến thức về các hệ Quản trị CSDL',
                'objectif' => 'nắm được cách thao tác với các hệ quản trị CSDL',
                'competences_requises' => 'không',
                'niveau_de_difficulte' => 6,
                'image' => 'courses/E33Xqf8sezZnEWEBUoL63G3eD102JKUK9GzHOz6w.png',
                'category' => 'AT16',
                'created_at' => '2022-02-17 13:26:27',
                'updated_at' => '2022-02-17 13:26:27',
            ),
            2 => 
            array (
                'id' => 4,
                'teacher_id' => 1,
                'title' => 'Quản trị mạng',
                'descriptif' => 'Cung cấp các kỹ năng cơ bản trong lĩnh vực Quản trị mạng máy tính hiện đại',
                'objectif' => 'nắm được cách thao tác với các công việc quản trị các mạng máy tính',
                'competences_requises' => 'không',
                'niveau_de_difficulte' => 8,
                'image' => 'courses/XMc8yOFV2I8qdgX6vrdtA1b3Ecyjbr1vciGJkoom.png',
                'category' => 'AT15',
                'created_at' => '2022-02-17 13:44:16',
                'updated_at' => '2022-02-17 13:44:16',
            ),
            3 => 
            array (
                'id' => 5,
                'teacher_id' => 1,
                'title' => 'Pháp luật đại cương',
                'descriptif' => 'Khoá học này cung cấp kiến thức về Pháp luật nhà nước Việt Nam',
                'objectif' => 'nắm được các nội dung quan trọng của Pháp luật nhà nước Việt Nam',
                'competences_requises' => 'không',
                'niveau_de_difficulte' => 7,
                'image' => 'courses/NgQqiPz3TGoz0dpQR9ia7fNJX1jpY6LTenOTKTWr.png',
                'category' => 'AT16',
                'created_at' => '2022-02-17 13:45:47',
                'updated_at' => '2022-02-17 13:45:47',
            ),
            4 => 
            array (
                'id' => 6,
                'teacher_id' => 1,
                'title' => 'Nguyên lý hệ điều hành',
                'descriptif' => 'Khoá học này cung cấp kiến thức về cách vận hành của một Hệ điều hành',
                'objectif' => 'nắm được các nội dung quan trọng về cách vận hành của một Hệ điều hành',
                'competences_requises' => 'không',
                'niveau_de_difficulte' => 1,
                'image' => 'courses/BidqFzCoTELs5CurOY0eGXk1g8orxWiTFqKIi2fC.png',
                'category' => 'AT14',
                'created_at' => '2022-02-17 13:46:59',
                'updated_at' => '2022-02-17 13:46:59',
            ),
            5 => 
            array (
                'id' => 9,
                'teacher_id' => 1,
                'title' => 'Lập trình ứng dụng web',
                'descriptif' => 'Cung cấp các kỹ năng cơ bản trong lĩnh vực lập trình ứng dụng web',
                'objectif' => 'nắm được cách thao tác với các công việc lập trình ứng dụng web',
                'competences_requises' => 'không',
                'niveau_de_difficulte' => 7,
                'image' => 'courses/U9Etwm8KD3HZsblwkaXisOMaOtvg8XdYvIlDlzM1.png',
                'category' => 'AT15',
                'created_at' => '2022-02-17 13:50:06',
                'updated_at' => '2022-02-17 13:50:06',
            ),
            6 => 
            array (
                'id' => 10,
                'teacher_id' => 1,
                'title' => 'Khoa học máy tính',
                'descriptif' => 'chương này tập chung vào giới thiệu tổng quan về Khoa học máy tính',
                'objectif' => 'nắm được các nội dung quan trọng của Khoa học máy tính',
                'competences_requises' => 'không',
                'niveau_de_difficulte' => 7,
                'image' => 'courses/6E8DMbfuzmqZgMZgTqKvwXmDttktXC5oAa8kamUa.png',
                'category' => 'AT15',
                'created_at' => '2022-02-17 13:51:32',
                'updated_at' => '2022-02-17 13:51:32',
            ),
            7 => 
            array (
                'id' => 16,
                'teacher_id' => 1,
                'title' => 'Tiếng Anh 1',
                'descriptif' => 'Khoá học này cung cấp kiến thức về Tiếng Anh',
                'objectif' => 'sử dụng khá Tiếng Anh các kỹ năng nghe, đọc',
                'competences_requises' => 'không',
                'niveau_de_difficulte' => 5,
                'image' => 'courses/H2lECwkZ5S085JO7XVQxGp4daaekJ0Vsuj6O0A2D.png',
                'category' => 'AT14',
                'created_at' => '2022-02-17 13:55:39',
                'updated_at' => '2022-02-17 13:55:39',
            ),
            8 => 
            array (
                'id' => 17,
                'teacher_id' => 1,
                'title' => 'An toàn cơ sở dữ liệu',
                'descriptif' => 'Khoá học này cung cấp kiến thức về An toàn CSDL',
                'objectif' => 'nắm được các nội dung quan trọng về cách đảm bảo An toàn CSDL',
                'competences_requises' => 'không',
                'niveau_de_difficulte' => 1,
                'image' => 'courses/1wmsY9qFls9PSvrvBitQ5Bbl0FFTBUbWwe9GruJL.png',
                'category' => 'AT16',
                'created_at' => '2022-02-17 13:56:39',
                'updated_at' => '2022-02-17 13:56:39',
            ),
        ));
        
        
    }
}