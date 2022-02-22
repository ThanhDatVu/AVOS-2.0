<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('admins')->delete();

        \DB::table('admins')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'user_id' => 13,
                    '2authpass' => '',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
        ));


    }
}
