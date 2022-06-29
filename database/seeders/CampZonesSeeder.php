<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CampZones;

class CampZonesSeeder extends Seeder
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
              'nickname' => 'Papperwood',
          ],
          [
              'nickname' => 'Redwood',
          ],
          [
              'nickname' => 'Eucalyptus',
          ]
        ];

        foreach ($campzones as $campzone){
            CampZones::create(['nickname' => $campzone['nickname']]);
        }
    }
}
