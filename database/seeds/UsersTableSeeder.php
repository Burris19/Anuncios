<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Julian Hernandez',
            'email' => 'julianhernandez19@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
