<?php

namespace Database\Seeders;

use App\Models\ContactQwords;
use Illuminate\Database\Seeder;

class ContactQwordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacts =[
            [
                'gambar'=>'phone.svg',
                'contact'=>'0804-1-808-888'
            ],
            [
                'gambar'=>'phone.svg',
                'contact'=>'021 39708800'
            ],
            [
                'gambar'=>'mail.svg',
                'contact'=>'+6281 7437 111'
            ],
            [
                'gambar'=>'link.svg',
                'contact'=>'info@qwords.com'
            ]
        ];

        foreach ($contacts as $contact) {
            ContactQwords::create($contact);
        }
    }
}
