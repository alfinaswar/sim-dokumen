<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaritimeCategorySeeder extends Seeder
{
    public function run()
    {
        // Data untuk kategori situasi maritim
        $categories = [
            'Maritime Incidents',
            'Armed Sea Robbery',
            'Contraband Smuggling',
            'Marine Pollution',
            'Drugs Trafficking',
            'Irregular Human Migration',
            'Natural Disaster > 4SR',
            'IUU Fishing',
            'Maritime Terrorism',
            'Illegal Fuel Siphoning',
            'Trespassing',
            'Others'
        ];
 $WarnaTabel = [
            '#9f602b',
            '#d268c6',
            '#f7ff5e',
            '#a89335',
            '#586bb9',
            '#632799',
            '#72b05c',
            '#c42f28',
            '#abd266',
            '#808080',
            '#a0a6d7',
            '#000000'

        ];
        // Menginsert data kategori ke tabel situasi_maritim
        foreach ($categories as $index => $category) {
            DB::table('master_kategoris')->insert([
                'NamaKategori' => $category,
                'WarnaTabel' => $WarnaTabel[$index] // Use the corresponding color
            ]);
        }
    }
}
