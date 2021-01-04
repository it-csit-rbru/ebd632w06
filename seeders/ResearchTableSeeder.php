<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ResearchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('research')->insert(array(
            ['nameth'=>'A','nameen'=>'A','budget'=>'150000','rfp_id'=>'2','contract_signed'=>'20200101'],
            ['nameth'=>'B','nameen'=>'B','budget'=>'120000','rfp_id'=>'2','contract_signed'=>'20200201'],
            ['nameth'=>'C','nameen'=>'C','budget'=>'110000','rfp_id'=>'2','contract_signed'=>'20200301'],
            ['nameth'=>'D','nameen'=>'D','budget'=>'170000','rfp_id'=>'2','contract_signed'=>'20200401'],
            ['nameth'=>'E','nameen'=>'E','budget'=>'120000','rfp_id'=>'2','contract_signed'=>'20200501'],
            ['nameth'=>'F','nameen'=>'F','budget'=>'100000','rfp_id'=>'2','contract_signed'=>'20200601'],
            ['nameth'=>'G','nameen'=>'G','budget'=>'110000','rfp_id'=>'2','contract_signed'=>'20200701'],
            ['nameth'=>'H','nameen'=>'H','budget'=>'130000','rfp_id'=>'2','contract_signed'=>'20200801'],
            ['nameth'=>'I','nameen'=>'I','budget'=>'190000','rfp_id'=>'2','contract_signed'=>'20200901'],
            ['nameth'=>'J','nameen'=>'J','budget'=>'300000','rfp_id'=>'2','contract_signed'=>'20201001'],
            ['nameth'=>'K','nameen'=>'K','budget'=>'120000','rfp_id'=>'2','contract_signed'=>'20201101'],
            ['nameth'=>'L','nameen'=>'L','budget'=>'180000','rfp_id'=>'2','contract_signed'=>'20201201'],

        ));
    }
}
