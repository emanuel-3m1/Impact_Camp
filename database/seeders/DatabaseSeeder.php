<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CampZoneSeeder;
use Database\Seeders\CampSiteSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CampZoneSeeder::class);
        $this->call(CampSiteSeeder::class);
    }
}
