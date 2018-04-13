<?php

use Illuminate\Database\Seeder;

class CrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++)
        DB::table('cruds')->insert([
            'title' => str_random(20),
            'post' => str_random(100),        
        ]);
    }
}
