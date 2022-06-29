<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CampZone;

class CampZoneSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $campzones = [
          [
              'title' => 'Papperwood',
          ],
          [
              'title' => 'Redwood',
          ],
          [
              'title' => 'Eucalyptus',
          ]
        ];

        foreach ($campzones as $campzone){
            CampZone::create(['title' => $campzone['title']]);
        }
    }
}
