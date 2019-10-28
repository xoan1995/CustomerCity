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
        $customer=new Customer();
        $customer->name='customer 1';
        $customer->dob='1998-06-02';
        $customer->phone='0855918444';
        $customer->email='customer1@gmail.com';
        $customer->city_id='1';
        $customer->save();

        $customer=new Customer();
        $customer->name='customer 2';
        $customer->dob='1998-06-04';
        $customer->phone='0855918333';
        $customer->email='customer2@gmail.com';
        $customer->city_id='2';
        $customer->save();

        $customer=new Customer();
        $customer->name='customer 3';
        $customer->dob='1998-06-03';
        $customer->phone='0855914444';
        $customer->email='customer3@gmail.com';
        $customer->city_id='3';
        $customer->save();

        $customer=new Customer();
        $customer->name='customer 4';
        $customer->dob='1998-06-02';
        $customer->phone='0855915678';
        $customer->email='customer4@gmail.com';
        $customer->city_id='4';
        $customer->save();

        $customer=new Customer();
        $customer->name='customer 5';
        $customer->dob='1998-07-02';
        $customer->phone='0855333444';
        $customer->email='customer5@gmail.com';
        $customer->city_id='5';
        $customer->save();
    }
}
