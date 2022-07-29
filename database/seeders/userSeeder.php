<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// add DB
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'ammar zaqwan',
            'email'=>'ammmar@mail.com',
            'password'=>Hash::make('54321')
        ]);
    }
}
