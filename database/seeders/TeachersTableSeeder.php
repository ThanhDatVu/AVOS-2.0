<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teachers')->delete();
        
        \DB::table('teachers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 13,
                'profession' => 'Khoa học máy tính',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}