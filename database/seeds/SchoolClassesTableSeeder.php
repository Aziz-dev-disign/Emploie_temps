<?php

use App\SchoolClass;
use Illuminate\Database\Seeder;

class SchoolClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = [
            [
                'id' => 1,
                'name' => 'Première année'
            ],
            [
                'id' => 2,
                'name' => 'Deuxième année'
            ],
            [
                'id' => 3,
                'name' => 'Troisième année'
            ],
            [
                'id' => 4,
                'name' => 'Quatrième année'
            ],
            [
                'id' => 5,
                'name' => 'Cinquième année'
            ],
            [
                'id' => 6,
                'name' => 'Sixième année'
            ],
            [
                'id' => 7,
                'name' => 'Septième année'
            ]
        ];

        SchoolClass::insert($classes);
    }
}
