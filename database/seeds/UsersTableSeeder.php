<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'fName' => 'user',
            'lName' => 'user',
            'dln' => '14141414',
            'insNo'=>'12121212',
            'nic' => '982242665v',
            'phone' => '0719448937',
            'email' => 'user@accr.com',
            'password' => Hash::make('password'),
        ]);
    }
}
