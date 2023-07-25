<?php

namespace Database\Seeders;

use App\Models\Qna;
use Illuminate\Database\Seeder;

class QnaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $qnas=[
            [
                'pertanyaan'=>'Apa itu web hosting?',
                'jawaban'=>'Hosting adalah tempat penyimpanan file dan data website seperti teks, video dan gambar website.File dan data tersebut di simpan di dalam server yang terkoneksi dengan internet sehingga data tersebut dapat diakses oleh siapa saja, kapan saja dan di mana saja.'
            ],
            [
                'pertanyaan'=>'Ada berapa jenis hosting di Qwords?',
                'jawaban'=>'Hosting adalah tempat penyimpanan file dan data website seperti teks, video dan gambar website.'
            ],
            [
                'pertanyaan'=>'Apa kelebihan dari cloud hosting Qwords?',
                'jawaban'=>'Hosting adalah tempat penyimpanan file dan data website seperti teks, video dan gambar website.'
            ],
            [
                'pertanyaan'=>'Mengapa saya perlu web hosting?',
                'jawaban'=>'Hosting adalah tempat penyimpanan file dan data website seperti teks, video dan gambar website.'
            ],
            [
                'pertanyaan'=>'Mengapa saya perlu web hosting?',
                'jawaban'=>'Hosting adalah tempat penyimpanan file dan data website seperti teks, video dan gambar website.'
            ],
            [
                'pertanyaan'=>'Apa saya bisa transfer Hosting ke Qwords Cloud Web Hosting Indonesia?',
                'jawaban'=>'Hosting adalah tempat penyimpanan file dan data website seperti teks, video dan gambar website.'
            ]
        ];

        foreach($qnas as $qna){
            Qna::create($qna);
        }
    }
}
