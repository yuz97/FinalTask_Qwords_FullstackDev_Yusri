<?php

namespace Database\Seeders;

use App\Models\Domain;
use Illuminate\Database\Seeder;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $domains=[
            [
                'jenis_domain' => '.com',
                'harga' => 165000
            ],
            [
                'jenis_domain' => '.id',
                'harga' => 165000
            ],
            [
                'jenis_domain' => '.org',
                'harga' => 165000
            ]
        ];

        foreach ($domains as $domain) {
            Domain::create($domain);
        }
    }
}
