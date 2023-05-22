<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class LavelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lavels')->insert([
            'code' => "123456789",
            'name' => "Desarrollo de aplicaciones web",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('lavels')->insert([
            'code' => "987654321",
            'name' => "mecanizado",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('lavels')->insert([
            'code' => "345678264",
            'name' => "administracion",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('lavels')->insert([
            'code' => "984367589",
            'name' => "Administracion de sistemas informaticos",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
