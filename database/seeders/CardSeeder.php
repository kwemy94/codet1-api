<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cartes = array(
            array(
                "title" => "VIP Premium",
                "description" => "Place à la table d'honneur",
                "amount" => 15000,
            ),
            array(
                "title" => "Classique",
                "description" => "Carte pour tous",
                "amount" => 5000,
            ),
            array(
                "title" => "Premium",
                "description" => "Pour un developpement participatif",
                "amount" => 10000,
            ),
            array(
                "title" => "VIP PRO",
                "description" => "Developpons Notre village",
                "amount" => 50000,
            ),
            array(
                "title" => "Honorable",
                "description" => "Developpons Notre village",
                "amount" => 100000,
            ),
            
        );

        foreach ($cartes as $card) {
            $oldCard = DB::table('cards')->where('title', $card['title'])->first();

            if(!$oldCard){
                DB::table('cards')->insert($card);
            }
        }
    }
}
