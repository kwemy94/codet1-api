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
                "value" => "0",  # 0 => fermé, 1 => ouvert
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
