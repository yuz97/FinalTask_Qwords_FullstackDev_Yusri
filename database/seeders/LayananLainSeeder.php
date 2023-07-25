<?php

namespace Database\Seeders;

use App\Models\LayananLain;
use Illuminate\Database\Seeder;

class LayananLainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $layanans=[
            [
                'nama_layanan'=>'SSL',
                'gambar'=> 'shield.svg',
                'deskripsi' => 'Jadikan website Anda lebih terpercaya dan disukai oleh search engine dengan menggunakan SSL Certificate.',
                'harga'=>112000,
                'masa' =>'tahun'
            ],
            [
                'nama_layanan'=>'dedicated server',
                'gambar'=> 'server.svg',
                'deskripsi' => 'Nikmati kelola Dedicated Server sendiri dengan akses remote dari seluruh dunia tanpa batas',
                'harga'=>499000,
                'masa'=>'bulan'
            ],
            [
                'nama_layanan'=>'colocation server',
                'gambar'=> 'stack-server.svg',
                'deskripsi' => 'Akses cepat dari seluruh dunia denga fasilitas 24x7 full monitoring dengan cooling system terbaik serta fire extinguisher',
                'harga'=>500000,
                'masa'=>'bulan'
            ]
        ];

        foreach ($layanans as $layanan) {
            LayananLain::create($layanan);
        }
    }
}
