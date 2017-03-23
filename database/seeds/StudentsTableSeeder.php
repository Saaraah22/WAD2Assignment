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
        DB::table('students')->insert([
        	'first_name'=> 'Sarah'
        	'last_name'=> 'Pangan'
        	'program'=> 'BSIS'
        	'Age'=> '19'
        	]);
    }
}
00