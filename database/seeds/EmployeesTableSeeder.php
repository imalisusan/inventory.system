<?php
use App\Employee;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee =
        [
            [
                'Employee_Name' => 'Neema Njoki',
                'National_ID_No' => '1235422',
            ],
            [
                'Employee_Name' => 'Susan Imali',
                'National_ID_No' => '1293848',
            ],
        ];
        foreach($employee as $key => $value)
            {
                Employee::create($value);
            }
    }
}
