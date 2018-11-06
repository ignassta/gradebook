<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = new \App\Student([
            'name' => 'Antanas',
            'surname' => 'Gustys',
            'email' => 'antanas@mail.com',
            'phone' => '860000011',
        ]);
        $student->save();

        $student = new \App\Student([
            'name' => 'Kotryna',
            'surname' => 'Arlaitė',
            'email' => 'kotryna@mail.com',
            'phone' => '860000022',
        ]);
        $student->save();

        $student = new \App\Student([
            'name' => 'Juozas',
            'surname' => 'Genys',
            'email' => 'juozas@mail.com',
            'phone' => '860000033',
        ]);
        $student->save();

        $student = new \App\Student([
            'name' => 'Petras',
            'surname' => 'Barsukas',
            'email' => 'petras@mail.com',
            'phone' => '860000044',
        ]);
        $student->save();
    }
}
