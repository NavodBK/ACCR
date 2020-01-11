<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'fName' => 'admin',
            'LName' => 'user',
            'nic' => '982242665v',
            'phone' => '0719448937',
            'email' => 'admin@accr.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('admins')->insert([
            'fName' => 'admin2',
            'LName' => 'user2',
            'nic' => '982242666v',
            'phone' => '0719448938',
            'email' => 'admin2@accr.com',
            'password' => Hash::make('password'),
        ]);
    }
}
