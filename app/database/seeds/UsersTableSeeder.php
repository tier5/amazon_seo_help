<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['firstname' => 'super','lastname' => 'admin','email' => 'admin@gmail.com','password' => bcrypt('123456'),'userName' => 'admin','role' => '1','created_at' => Carbon::now(),'updated_at' => Carbon::now()]);
    }
}
