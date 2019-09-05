<?php

use App\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new City();
        $city->name = 'Ha Noi';
        $city->save();

        $city = new City();
        $city->name = 'Ho Chi Minh';
        $city->save();

        $city = new City();
        $city->name = 'Da Nang';
        $city->save();

        $city = new \App\City();
        $city->name = 'Hai Phong';
        $city->save();

        $city = new \App\City();
        $city->name = 'Hoa Binh';
        $city->save();

        $city = new \App\City();
        $city->name = 'Quang Ninh';
        $city->save();
    }
}
