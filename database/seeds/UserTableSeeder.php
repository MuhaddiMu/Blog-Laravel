<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

        [
            'name' => 'Muhammad Muhaddis',
            'email' => 'Muhaddisshah@gmail.com',
            'password' => bcrypt('SecurityLeet'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            
        ], 
        
        [
            'name' => 'Ask Muhaddis',
            'email' => 'Ask@Muhaddis.Info',
            'password' => bcrypt('SecurityLeet'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ],

        ]);
    }
}
