<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CorporationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('corporations')->insert([
            'name' => "ibermatica",
            'password' => bcrypt("password"),
            'phone' => '674876934',
            'email' => "ibermatica@gmail.com",
            'website' => "ibermaticaWeb",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('corporations')->insert([
            'name' => "ampo",
            'password' => bcrypt("password"),
            'phone' => '985738495',
            'email' => "ampo@gmail.com",
            'website' => "ampoWeb",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('corporations')->insert([
            'name' => "caf",
            'password' => bcrypt("password"),
            'phone' => '987465834',
            'email' => "caf@gmail.com",
            'website' => "cafWeb",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('corporations')->insert([
            'name' => "irizar",
            'password' => bcrypt("password"),
            'phone' => '863523126',
            'email' => "irizar@gmail.com",
            'website' => "irizarWeb",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
