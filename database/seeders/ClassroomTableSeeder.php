<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classroom = new Classroom();
        $classroom->number_classroom='500';
        $classroom->save();
        $classroom = new Classroom();
        $classroom->number_classroom='501';
        $classroom->save();
        $classroom->number_classroom='505';
        $classroom->save();
    }
}
