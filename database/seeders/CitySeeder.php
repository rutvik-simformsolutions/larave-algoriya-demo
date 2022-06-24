<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared(file_get_contents(base_path('database/seeders/CountryStateCity/cities/cities1.sql')));
        DB::unprepared(file_get_contents(base_path('database/seeders/CountryStateCity/cities/cities2.sql')));
        DB::unprepared(file_get_contents(base_path('database/seeders/CountryStateCity/cities/cities3.sql')));
        DB::unprepared(file_get_contents(base_path('database/seeders/CountryStateCity/cities/cities4.sql')));
        DB::unprepared(file_get_contents(base_path('database/seeders/CountryStateCity/cities/cities5.sql')));
        DB::unprepared(file_get_contents(base_path('database/seeders/CountryStateCity/cities/cities6.sql')));
    }
}
