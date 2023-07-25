<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partners= [
            [
                'nama'=>'google_cloud',
                'gambar'=>'google_cloud.webp'
            ],
            [
                'nama'=>'cpanel',
                'gambar'=>'cpanel.webp'
            ],
            [
                'nama'=>'idea',
                'gambar'=>'idea.webp'
            ],
            [
                'nama'=>'achi',
                'gambar'=>'achi.webp'
            ],
            [
                'nama'=>'bangga',
                'gambar'=>'bangga.webp'
            ]
        ];

        foreach ($partners as $partner) {
            Partner::create($partner);
        }
    }
}
