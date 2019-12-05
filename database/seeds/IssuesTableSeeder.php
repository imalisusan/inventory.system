<?php
use App\Issue;
use Illuminate\Database\Seeder;

class IssuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $issue=[
            [
                'Product_Name' => 'Rhino',
                'Quantity' => '2',
                'Customer_Name' => 'Mark Dougal',
            ],
            [
                'Product_Name' => 'Elephant',
                'Quantity' => '4',
                'Customer_Name' =>'Teresa Paige',
            ],
            ];
            foreach($issue as $key => $value)
            {
                Issue::create($value);
            }
    }
}
