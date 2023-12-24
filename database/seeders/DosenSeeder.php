<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class Dosenseeder extends Seeder
{
    public function run(): void
    {
       DB::table('dosens')->insert([
        'nidn'=> "112233",
        'nama'=>'Dosen12',
        'alamat'=>'Padang',
        'no_hp'=> '0899223344',
       ]);
    }
}