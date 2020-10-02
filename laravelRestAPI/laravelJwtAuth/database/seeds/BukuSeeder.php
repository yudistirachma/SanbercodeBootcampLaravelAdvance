<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 6; $i++) {
            DB::table('bukus')->insert([
                'judul' => Str::random(10),
                'pengarang' => Str::random(10),
                'tahun_terbit' => Carbon::now()->subMinutes(rand(1, 55)),           
            ]);
        }
    }
}
