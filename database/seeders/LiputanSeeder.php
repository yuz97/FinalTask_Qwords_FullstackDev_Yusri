<?php

namespace Database\Seeders;

use App\Models\Liputan;
use Illuminate\Database\Seeder;

class LiputanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $liputans = [
            [
                'nama'=>'detikcom',
                'gambar'=>'detikcom.webp'
            ],
            [
                'nama'=>'liputan6',
                'gambar'=>'liputan6.webp'
            ],
            [
                'nama'=>'tribunjogja',
                'gambar'=>'tribunjogja.webp'
            ],
            [
                'nama'=>'antara',
                'gambar'=>'antara.webp'
            ],
            [
                'nama'=>'rmco',
                'gambar'=>'rmco.webp'
            ],
            [
                'nama'=>'koranbernas',
                'gambar'=>'koranbernas.webp'
            ]
            ];

        foreach ($liputans as $liputan) {
            Liputan::create($liputan);
        }
    }
}
