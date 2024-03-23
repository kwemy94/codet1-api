<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = array(
            array(
                "name" => "open_member_registration",
                "description" => "Ouverture des enregistrements",
            ),
            array(
                "name" => "A propos",
                "description" => "Le commité de développement du village Tchuelekouet I (CODET I) 
                    est une association à but non lucrative. Elle voit le jour en 2003 sous l'égide des fils 
                    Tchuelekouet. Sa mission principale est de reunir tous les fils de ce village afin de 
                    réfléchir ensemble et implementer une politique pour le développement du village.
                    Elle constitué d'un bureau exécutif qui, coordonne les activités et est chargé de suivre et 
                    implementer les projets",
            ),
            
        );

        foreach ($settings as $setting) {
            $old = DB::table('settings')->where('name', $setting['name'])->first();

            if(!$old){
                DB::table('settings')->insert($setting);
            }
        }
    }
}
