<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PoliceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('police')->insert([
            'fName' => 'police',
            'LName' => 'user',
            'nic' => '982242665v',
            'phone' => '0719448937',
            'email' => 'police@accr.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('police')->insert([
            'fName' => 'police2',
            'LName' => 'user2',
            'nic' => '982242662v',
            'phone' => '0719448938',
            'email' => 'police2@accr.com',
            'password' => Hash::make('password'),
        ]);
    }
}
