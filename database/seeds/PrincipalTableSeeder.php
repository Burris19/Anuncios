<?php

use Illuminate\Database\Seeder;

class PrincipalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('principal')->insert([
        	'topText' 			  => 'topText princial',
			'email'				  => 'email@principal.com',
			'phone'				  => '78451269',
			'featuredDescription' => 'descripcion principal',
			'novelties'			  => 'novelties principal',
			'bannersDescription'  => 'banner de descripcion princial'
        ]);
    }
}
