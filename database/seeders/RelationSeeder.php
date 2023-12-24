<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelationSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('relations')->insert([
            'mahasiswa_npm'=> "23234355",
            'dosen_nidn'=>'112233',
            'matakuliah_kode'=>'232323',
            'status_aktif'=>'Y',
        
        ]);

}
}