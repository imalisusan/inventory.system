<?php 
use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'=>'Susan Imali',
            'email'=>'susanimali52@gmail.com',
            'password'=>Hash::make('imali52'),

        ));
    }
}