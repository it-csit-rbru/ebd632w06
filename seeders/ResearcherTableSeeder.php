<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ResearcherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('researcher')->insert(array(
            ['ttl_id'=>'4','fname' =>'บุษยา','lname' => 'ประทุมยศ','fct_id'=>'9'],         
            ['ttl_id'=>'4','fname' =>'ปฏิคม','lname' => 'ทองจริง','fct_id'=>'9'],
            ['ttl_id'=>'7','fname' =>'วิสันต์','lname' => 'พูนชัย','fct_id'=>'9'],
            ['ttl_id'=>'7','fname' =>'ทิพวรรณ์','lname' => 'นิยมวงศ์','fct_id'=>'9'],
            ['ttl_id'=>'7','fname' =>'ทิพย์วรรณ','lname' => 'ฟูเฟื่อง','fct_id'=>'9'],
            ['ttl_id'=>'4','fname' =>'อนุสรณ์','lname' => 'เจริญนาน','fct_id'=>'9'],
            ['ttl_id'=>'4','fname' =>'วันดี','lname' => 'โชคช่วยพัฒนากิจ','fct_id'=>'9'],
            ['ttl_id'=>'7','fname' =>'นิทัศน์','lname' => 'นิลฉวี','fct_id'=>'9'],
            ['ttl_id'=>'4','fname' =>'สาธิต','lname' => 'สุวรรณเวช','fct_id'=>'9'],
            ['ttl_id'=>'4','fname' =>'ณัฐกาญจน์','lname' => 'พึ่งเกิด','fct_id'=>'9'],
            ['ttl_id'=>'4','fname' =>'ทวีศักดิ์','lname' => 'สัมมา','fct_id'=>'9'],
            ['ttl_id'=>'4','fname' =>'ขนิษฐา','lname' => 'สิทธิเทียมจันทร์','fct_id'=>'9'],
            ['ttl_id'=>'4','fname' =>'ปรัชญา','lname' => 'ใจสุทธิ','fct_id'=>'9'],
            ['ttl_id'=>'4','fname' =>'วสุพล','lname' => 'เผือกนำผล','fct_id'=>'9'],
            ['ttl_id'=>'4','fname' =>'คัมภีร์','lname' => 'ธีระเวช','fct_id'=>'9'],
            ['ttl_id'=>'4','fname' =>'วิระ','lname' => 'ศรีมาลา','fct_id'=>'9'],
            ['ttl_id'=>'4','fname' =>'ทบทอง','lname' => 'ชั้นเจริญ','fct_id'=>'9'],
            ['ttl_id'=>'7','fname' =>'ศศิกานต์','lname' => 'ไพลกลาง','fct_id'=>'9'],
            ['ttl_id'=>'7','fname' =>'ขนิษฐา','lname' => 'ยารักษ์','fct_id'=>'9'],
        ));
    }
}
