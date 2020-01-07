<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ins')->insert([
            'fName' => 'ins',
            'LName' => 'user',
            'nic' => '982242665v',
            'phone' => '0719448937',
            'email' => 'ins@accr.com',
            'password' => Hash::make('password'),
        ]);
    }
}
