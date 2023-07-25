<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([

            BenefitSeeder::class,
            ContactQwordsSeeder::class,
            DomainSeeder::class,
            LayananSeeder::class,
            LayananLainSeeder::class,
            LiputanSeeder::class,
            PaketHostingSeeder::class,
            PartnerSeeder::class,
            PelangganSeeder::class,
            QnaSeeder::class,
            TestimonialSeeder::class
        ]);
    }
}
