<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insert data
        DB::table('detail_profile')->insert([
            'address' => 'Situbondo',
            'nomor_tlp' => '085xxxx1922',
            'ttl' => '2002-04-09',
            'foto' => 'picture2.png',
        ]);
    }
}
