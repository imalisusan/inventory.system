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
        $user =[
            [
                'Employee Name' => 'Neema Njoki',
                'National ID No' => '1235422',
            ],
            [
                'Employee Name' => 'Maryann Gitonga',
                'National ID No' => '1293848',
            ],
        ];
        foreach($user as $key => $value)
            {
                Employee::create($value);
            }
    }
}
