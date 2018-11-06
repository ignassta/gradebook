<?php

use Illuminate\Database\Seeder;

class LecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lecture = new \App\Lecture([
            'title' => 'Įžanga į PHP',
            'description' => 'PHP programavimo kalbos pagrindai',
        ]);
        $lecture->save();

        $lecture = new \App\Lecture([
            'title' => 'PHP if else funkcijos',
            'description' => 'if else funkcojos ir jų panaudojimas',
        ]);
        $lecture->save();

        $lecture = new \App\Lecture([
            'title' => 'Ciklai',
            'description' => 'Ciklai ir ką su jais daryt',
        ]);
        $lecture->save();

        $lecture = new \App\Lecture([
            'title' => 'Klasės',
            'description' => 'Pirma paskaita apie PHP klases',
        ]);
        $lecture->save();
    }
}
