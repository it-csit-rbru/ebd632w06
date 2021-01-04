<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FacultyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faculty')->insert(array(
            ['nameth' =>'คณะครุศาสตร์','nameen' => 'Faculty of Educational'],
            ['nameth' =>'คณะมนุษย์ศาสตร์และสังคมศาสตร์','nameen' => 'Faculty of Humanity and Sociality'],
            ['nameth' =>'คณะเทคโนโลยีการเกษตร','nameen' => 'Faculty of Agriculture Techmology'],
            ['nameth' =>'คณะวิทยาศาสตร์และเทคโนโลยี','nameen' => 'Faculty of Science and Technology'],
            ['nameth' =>'คณะวิทยาการจัดการ','nameen' => 'Faculty of Management Science'],
            ['nameth' =>'คณะเทคโนโลยีอุตสาหกรรม','nameen' => 'Faculty of Industraial Technology'],
            ['nameth' =>'คณะนิติศาสตร์','nameen' => 'Faculty of Law'],
            ['nameth' =>'คณะนิเทศศาสตร์','nameen' => 'Faculty of Communication Art'],
            ['nameth' =>'คณะวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ','nameen' => 'Faculty of COmputer Science and Information Technology'],
            ['nameth' =>'คณะพยาบาลศาสตร์','nameen' => 'Faculty of Nursing'],
        ));
    }
}
