<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $layanans = [
            [
                'nama_layanan' => 'Value Cloud Hosting',
                'jenis_layanan'=>'VCH1',
                'harga_normal'=>24500,
                'harga_diskon' =>14500,
                'disk'=>'3 GB',
                'bandwith'=>'unlimited',
                'core_cpu'=>'0.5 Core',
                'parked_domain' =>'no'
            ],
            [
                'nama_layanan' => 'Unlimited Hosting',
                'jenis_layanan'=>'Signature',
                'harga_normal'=>114000,
                'harga_diskon' =>89900,
                'disk'=>'unlimited',
                'bandwith'=>'unlimited',
                'core_cpu'=>'1 Core',
                'parked_domain' =>'5/5'
            ],
            [
                'nama_layanan' => 'High Performance',
                'jenis_layanan'=>'HPCH Bisnis 1',
                'harga_normal'=>90000,
                'harga_diskon' =>79000,
                'disk'=>'3 GB',
                'bandwith'=>'unlimited',
                'core_cpu'=>'1 Core',
                'parked_domain' =>'-'
            ],
            [
                'nama_layanan' => 'Cloud VPS KVM SSD',
                'jenis_layanan'=>'VPS SC1',
                'harga_normal'=>135000,
                'harga_diskon' =>75000,
                'disk'=>'25 GB',
                'bandwith'=>'unlimited',
                'core_cpu'=>'1 Core',
                'parked_domain' =>'unlimited'
            ]
        ];

        foreach ($layanans as $layanan) {
            Layanan::create($layanan);
        }
    }
}
