<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer=[
            [
                'Customer_Name'=>'Mark Dougal',
                'Location'=>'United Kingdom',
            ],
            [
                'Customer_Name'=>'Teresa Paige',
                'Location'=>'United Kingdom',
            ]
            ];
            foreach($customer as $key => $value)
            {
                Customer::create($value);
            }
    }
}
