<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\{DB, Hash};

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
            'name' => 'editor',
            'email' => 'kanekesngamuk@gmail.com',
            'role' => 'editor',
            'password' => Hash::make('password'),
        ]);
    }
}
