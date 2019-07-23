<?php
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\User;
class AuthenticateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'=>'Ishmam',
        	'email'=>'alinewz33@gmail.com',
        	'phone'=>'01835052747',
        	'address'=>'West Rampura',
            'password' => Hash::make('123456'),
            'role'=>'admin',
        	
        ]);
    }
}
