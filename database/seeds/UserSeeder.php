<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i=0;
        /*DB::table('users')->insert([
            'name' => str_random(10),
            'email' => 'pragya@mail.com',
            'password' => bcrypt('secret'),
        ]);*/
        for($i=0;$i<10;$i++)
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
