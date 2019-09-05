<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();
        $customer->name = 'customer1';
        $customer->dob = '1998-03-02';
        $customer->email = 'customer1@gmail.com';
        $customer->city_id = 1;
        $customer->save();

        $customer = new Customer();
        $customer->name = 'customer2';
        $customer->dob = '1998-03-23';
        $customer->email = 'customer2@gmail.com';
        $customer->city_id = 2;
        $customer->save();

        $customer = new Customer();
        $customer->name = 'customer3';
        $customer->dob = '1998-12-14';
        $customer->email = 'customer3@gmail.com';
        $customer->city_id = 3;
        $customer->save();

        $customer = new Customer();
        $customer->name = 'customer4';
        $customer->dob = '1998-04-05';
        $customer->email = 'customer4@gmail.com';
        $customer->city_id = 4;
        $customer->save();

        $customer = new Customer();
        $customer->name = 'customer5';
        $customer->dob = '1998-13-07';
        $customer->email = 'customer5@gmail.com';
        $customer->city_id = 5;
        $customer->save();

        $customer = new Customer();
        $customer->name = 'customer6';
        $customer->dob = '1998-03-09';
        $customer->email = 'customer1@gmail.com';
        $customer->city_id = 6;
        $customer->save();
    }
}
