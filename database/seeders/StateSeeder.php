<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::unprepared(file_get_contents(base_path('database/seeders/CountryStateCity/states/states.sql')));
        DB::unprepared(file_get_contents(base_path('database/seeders/CountryStateCity/states/states_1.sql')));
        DB::unprepared(file_get_contents(base_path('database/seeders/CountryStateCity/states/states_2.sql')));
    }
}
