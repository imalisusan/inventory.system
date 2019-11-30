<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Mode1;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         Eloquent::unguard();
         $this->call('UserTableSeeder');
    }
}
