<?php

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
        factory(App\Batch::class, 10)->create();
        factory(App\Course::class,10)->create()->each(function ($course){
            factory(App\CourseDetail::class,20)->create();
        });
        factory(App\Faculty::class,10)->create()->each(function ($faculty)
        {
            factory(App\Student::class,100)->create();
        });
        for($i=1;$i<=100;$i++)
        {
            factory(App\Fee::class,1)->create();
        }
    }
}
