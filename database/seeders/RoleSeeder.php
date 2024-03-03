<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = array(
            array(
                "name" => "administration",
                "description" => "Membres de l'équipe dirigeante",
            ),
            array(
                "name" => "super-admin",
                "description" => "Super user app",
            ),
            array(
                "name" => "adhérent",
                "description" => "Super user app",
            ),
            array(
                "name" => "membre",
                "description" => "Membre du bureau",
            ),
            
        );

        foreach ($roles as $role) {
            $old = DB::table('roles')->where('name', $role['name'])->first();

            if(!$old){
                DB::table('roles')->insert($role);
            }
        }
    }
}
