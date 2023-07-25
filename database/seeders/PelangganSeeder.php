<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelanggans = [
            [
                'nama'=>'cimory',
                'gambar'=>'cimory.webp',
            ],
            [
                'nama'=>'forisa',
                'gambar'=>'forisa.webp',
            ],
            [
                'nama'=>'elsheskin',
                'gambar'=>'elsheskin.webp',
            ],
            [
                'nama'=>'icon',
                'gambar'=>'icon.webp',
            ],

            [
                'nama'=>'horison',
                'gambar'=>'horison.webp',
            ],
            [
                'nama'=>'md',
                'gambar'=>'md.webp',
            ]
        ];

        foreach ($pelanggans as $pelanggan) {
            Pelanggan::insert($pelanggan);
        }

    }
}
