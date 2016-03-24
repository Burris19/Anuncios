<?php

use Illuminate\Database\Seeder;

class SEOTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('SEO')->insert([
        	'siteDescription' => 'Descripcion del SEO',
          	'keywords'		  => 'KeyWords del SEO'
        ]);
    }
}
