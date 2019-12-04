<?php 
use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    public function run()
    {
       $user = [
           [
               'name' => 'Admin',
               'email' => 'susanimali52@gmail.com',
               'password' => bcrypt('Passwordsusan$52'),
           ],
           [
               'name' => 'User',
               'email' => 'imali.lungaho@strathmore.edu',
               'password' => bcrypt('passwordsusan'),
           ],
        ];
        foreach ($user as $key => $value)
            {
                User::create($value);
            }
    }
}