<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product=
        [
            [
                'Product_Name' => 'Elephant',
                'Quantity'     => '0',
                'Description' => 'Small',
            ],
            [
                'Product_Name' => 'Giraffe',
                'Quantity'     => '0',
                'Description' => 'Small',
            ]
        ];
        foreach($product as $key => $value)
        {
            Product::create($value);
        }
    }
}
