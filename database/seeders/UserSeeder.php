<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = array(
            array(
                "role_id" => 2,
                "association_id" => 1,
                "name" => "admin",
                "email" => 'admin@codet.org',
                "phone" => 672517118,
                "password" => Hash::make('1234'),
            ),
            array(
                "role_id" => 3,
                "association_id" => 1,
                "name" => "user1",
                "email" => 'user@codet.org',
                "phone" => 6517118,
                "password" => Hash::make('user@codet'),
            ),
            
        );

        foreach ($users as $user) {
            $old = DB::table('users')->where('phone', $user['phone'])->first();

            if(!$old){
                DB::table('users')->insert($user);
            }
        }
    }
}
