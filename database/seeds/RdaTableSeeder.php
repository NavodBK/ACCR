<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RdaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rdas')->insert([
            'fName' => 'rda',
            'LName' => 'user',
            'nic' => '982242665v',
            'phone' => '0719448937',
            'email' => 'rda@accr.com',
            'password' => Hash::make('password'),
        ]);
    }
}
