<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MahasiswaSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'npm'=>'23234355 ',
            'nama'=>'Mayong',
            'alamat'=>'Riau',
            'no_hp'=> '08122222',
          ]);
         }
}