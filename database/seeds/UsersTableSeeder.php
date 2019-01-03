<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
            [
                'name' => 'Rizki Aditia',
                'email' => 'aditia20.riz@gmail.com',
                'password' => bcrypt ('rizki1998'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'isAdmin' => '1'
            ],

            [
                'name' => 'Raka',
                'email' => 'melektechnology@gmail.com',
                'password' => bcrypt ('raka'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'isAdmin' => '0'
            ]


        ]);
    }
}
