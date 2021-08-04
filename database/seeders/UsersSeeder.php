<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
    		[
        	'name'=>'Skawan',
        	'email'=>'skawan@gmail.com',
        	'password'=> bcrypt('skawan'),
        	'email_verified_at'=>now(),

        	],
    		[
        	'name'=>'Lovre',
        	'email'=>'lovre@gmail.com',
        	'password'=> bcrypt('lovre'),
        	'email_verified_at'=>now(),

        	],
    	];
        
        foreach($users as $user){
        	User::create($user);
        }
    }
}
