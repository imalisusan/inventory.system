<?php

use App\Order;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order=[
            [
                'Product_Name' => 'Rhino',
                'Quantity' => '20',
                'Customer_Name' => 'Mark Dougal',
            ],
            [
                'Product_Name' => 'Elephant',
                'Quantity' => '5',
                'Customer_Name' =>'Teresa Paige',
            ],
            ];
            foreach($order as $key => $value)
            {
                Order::create($value);
            }
    }
}
