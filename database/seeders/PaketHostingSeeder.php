<?php

namespace Database\Seeders;

use App\Models\PaketHosting;
use Illuminate\Database\Seeder;

class PaketHostingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pakets = [
            [
                'jenis_paket'=>'Perusahaan',
                'deskripsi'=>'Wujudkan website perusahaan profesional dan berkelas dengan dukunga web hosting terbaik dan fitur keamanan extra',
                'gambar'=>'company.webp'
            ],
            [
                'jenis_paket'=>'UMKM dan Toko Online',
                'deskripsi'=>'Memberikan hosting terbaik untuk mendukung kebutuhan website pemasaran barang/jasa secara online',
                'gambar'=>'umkm.webp'
            ],
            [
                'jenis_paket'=>'Organisasi dan Komunitas',
                'deskripsi'=>'Bikin website organisasi atau komunitas Anda dengan paket hostig unggulan yang ramah kantong',
                'gambar'=>'org.webp'
            ],
            [
                'jenis_paket'=>'Sekolah',
                'deskripsi'=>'Infrastruktur webhosting terbaik untuk menunjang kegiatan e-learning didukung platform MOODLE khusus pembelajaran daring',
                'gambar'=>'school.webp'
            ],
            [
                'jenis_paket'=>'Developer',
                'deskripsi'=>'Tersedia paket hosting Indonesia denga spesifikasi khusus dev-friendly.Extra NodeJS dan Git Version Control',
                'gambar'=>'dev.webp'
            ],
            [
                'jenis_paket'=>'Blogger dan Personal',
                'deskripsi'=>'Memfasilitasi blogger dengan infrastruktur hosting Indonesia terbaik serta template website premium untuk tampilan lebih profesional',
                'gambar'=>'blog.webp'
            ]
        ];

        foreach ($pakets as $paket) {
            PaketHosting::create($paket);
        }

    }
}
