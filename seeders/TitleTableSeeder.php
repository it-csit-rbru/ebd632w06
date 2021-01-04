<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TitleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('title')->insert(array(
            ['nameth' =>'นาย','nameen' => 'Mr.'],
            ['nameth' =>'นาง','nameen' => 'Miss'],
            ['nameth' =>'นางสาว','nameen' => 'Mrs.'],
            ['nameth' =>'ผู้ช่วยศาสตราจารย์','nameen' => 'Assistant Professor'],
            ['nameth' =>'รองศาสตราจารย์','nameen' => 'Associate Professor'],
            ['nameth' =>'ศาสตราจารย์','nameen' => 'Professor'],
            ['nameth' =>'อาจารย์','nameen' => 'Lecturer'],
            
        ));
    }
}
