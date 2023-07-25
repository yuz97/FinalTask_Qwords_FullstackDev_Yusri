<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testimonials = [
            [
                'nama'=>'budi raharjo',
                'pekerjaan'=>'Founder ID Cert',
                'deskripsi_perusahaan'=>'Kami,ID Cert merupakan sebuah perusahaan yang bergerak dalam penyedia jasa informasi keamanan di Indonesia.Oleh karena itu,kami membutuhkan Qwords untuk mendukung kebutuhan kami terhadap server dan hosting yang selalu up selama 24 jam.',
                'gambar'=>'testi1.webp',
                'testimonial'=>'Semoga Qwords dapat terus bertahan,sehingga kami dan msyarakat Indonesia bisa mendapatkan layanan yang terbaik dari Qwords'
            ],
            [
                'nama'=>'kuns kurniawan',
                'pekerjaan'=>'PR Event Info BDG',
                'deskripsi_perusahaan'=>'Sebagai media penyedia kabar seputar kota Bandung.info BDG memnggunakan website sebagai rumah informasi.Website kami yang sempat down kini menunjukkan traffic yang tinggi setelah menggunakan dukungan dari Qwords',
                'gambar'=>'testi2.webp',
                'testimonial'=>'Pelayanan Qwords sangat cepat dan responsif,sehingga tidak butuh waktu lama membantu website kami kembali normal.Terbaik pokoknya.mah!'
            ],
            [
                'nama'=>'denden sofiudin',
                'pekerjaan'=>'Owner Rumah Kopi temanggung',
                'deskripsi_perusahaan'=>'Penjualan Rumah Kopi Temanggung 90% dilakukan secara online,salah satunya menggunakan website.Semenjak tahun 2015 hingga saat ini,kami menggunakan hosting dan domain dari Qwords',
                'gambar'=>'testi3.webp',
                'testimonial'=>'Hingga saat ini pula,kami tidak pernah menemukan masalah dari layanan yang diberikan Qwords.Layanan Costumer Service yang sangat baik,membuat kami tidak ingin berpindah dari Qwords'
            ]
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }

    }
}
