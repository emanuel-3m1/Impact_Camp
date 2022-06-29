<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CampSite;

class CampSiteSeeder extends Seeder
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
                'campzone_id' => '1',
            ],
            [
                'campzone_id' => '2',
            ],
            [
                'campzone_id' => '3',
            ]
        ];

        foreach ($campsites as $campsite){
            CampSite::create(['campzone_id' => $campsite['campzone_id']]);
        }

    }
}
