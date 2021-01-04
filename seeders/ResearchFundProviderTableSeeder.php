<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ResearchFundProviderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('research_fund_provider')->insert(array(
            ['nameth'=>'สถาบันวิจัยและพัฒนา มหาวิทยาลัยราชภัฏรำไพพรรณี','nameen'=>'','abbth'=>'','abben'=>''],
            ['nameth'=>'สถาบันวิจัยแห่งชาติ','nameen'=>'','abbth'=>'','abben'=>''],
            ['nameth'=>'กองทุนวิจัย คณะวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ มหาวิทยาลัยราชภัฏรำไพพรรณี','nameen'=>'','abbth'=>'','abben'=>'']
        ));
    }
}
