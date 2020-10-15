<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ArtiklesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        for ($i=0; $i < 5 ; $i++) { 
            DB::table('artikles')->insert([
                'user_id' => 1,
                'title' => Str::random(7),
                'artikle' => Str::random(300),
                'publish' => false,
            ]);
        }
    }
}
