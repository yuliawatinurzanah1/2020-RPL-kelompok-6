<?php

use Illuminate\Database\Seeder;


class InfractionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	

    		DB::table('infraction')->insert([
        	'name_infraction' => 'tidak menggunakan topi',
        	'point'			  => '10'

        ]);
    	        
    }
}
