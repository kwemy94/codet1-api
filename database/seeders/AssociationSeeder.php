<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AssociationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $associations = array(
            array(
                "name" => "Reunion adultes masculin de Douala",
                "town" => "Douala",
                "effective" => 60,
            ),
            array(
                "name" => "Reunion Femme de Yaoundé",
                "town" => "Yaoundé",
                "effective" => 45,
            ),
            array(
                "name" => "Jeunesse Bafoussam",
                "town" => "Bafoussam",
                "effective" => '',
            ),
        );

        foreach ($associations as $association) {
            $oldName = DB::table('associations')->where('name', $association['name'])->first();

            if(!$oldName){
                DB::table('associations')->insert($association);
            }
        }
    }
}
