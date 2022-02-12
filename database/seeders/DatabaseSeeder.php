<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {



        $this->call(UsersTableSeeder::class);
        $this->call(TeachersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(CourseUserTableSeeder::class);
        $this->call(LessonsTableSeeder::class);



    }
}
