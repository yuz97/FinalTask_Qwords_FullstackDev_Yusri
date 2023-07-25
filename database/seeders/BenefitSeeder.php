<?php

namespace Database\Seeders;

use App\Models\Benefit;
use Illuminate\Database\Seeder;

class BenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $benefits = [
            [
                'nama_benefit'=>'Layanan 24/7',
                'deskripsi'=>'Tim Technical Support dan Costumer Service Qwords siap membantu Anda selama 24 jam,7 hari.Anda dapat menghubungi melalui Live chat,Call Center dan Support Ticket',
                'gambar'=>'phone.svg',

            ],
            [
                'nama_benefit'=>'Panduan Manual Lengkap',
                'deskripsi'=>'Qwords dilengkapi dengan halaman knowledge base berisi tutorial dan tips seputar pengelolaan website dan hosting.Dapat diakses dengan mudah dan solutif',
                'gambar'=>'book.svg',

            ],
            [
                'nama_benefit'=>'Uptime 99.99%',
                'deskripsi'=>'Uptime Network dan Server diatas 99.99% dengan konfigurasi server yang tepat.Didukung manajemen jaringan dengan multiple upstream tier 1 Peovider network serta multiple peering',
                'gambar'=>'tool.svg',

            ],
            [
                'nama_benefit'=>'Jaminan Keamanan',
                'deskripsi'=>'Keamanan menjadi fokus utama kami di Qwords.Tindakan pemantauan dan pencegahan yang berstandar & berkelanjutan telah menjadi perhatian utama kami',
                'gambar'=>'shield.svg',

            ],
            [
                'nama_benefit'=>'Clustered DNS',
                'deskripsi'=>'DNS Server Cloud Hosting Qwords terhubung satu dengan yang lainnya.Hal ini membuat DNS Server akan selalu dapat di akses karena saling membackup antar server',
                'gambar'=>'network.svg',

            ],
            [
                'nama_benefit'=>'High Enterprise Server',
                'deskripsi'=>'Standar server Qwords adalah server kelas enterprise Dual Xeon Octa Core yang merupakan hardware kelas terbaik.Hardware ini biasa digunakan oelh perusahaan terkemuka',
                'gambar'=>'stack-server.svg',

            ],
            [
                'nama_benefit'=>'Tier 1 Network',
                'deskripsi'=>'Tier 1 Network merupak jaringan dunia tanpa transit network.yang membuat jaringan lebih cepat serta jalur routing yang lebih pendek dan ketersediaan backup network',
                'gambar'=>'bandwith.svg',

            ],
            [
                'nama_benefit'=>'Peerig Network',
                'deskripsi'=>'Jaringan di Qwords terhubung langsung ke public peering seperti OpenIXP dan CDIX yang membuat latency atau waktu tunggu pengiriman data semakin kecil',
                'gambar'=>'share-2.svg',

            ]
        ];

        foreach ($benefits as $benefit) {
            Benefit::create($benefit);
        }
    }
}
