<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CampSites;

class CampSitesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $campsites = [
            [
                'campsites_id' => '1',
            ],
            [
                'campsites_id' => '2',
            ],
            [
                'campsites_id' => '3',
            ]
        ];

        foreach ($campsites as $campsite){
            CampSites::create(['campsites_id' => $campsite['campsites_id']]);
        }

    }
}
