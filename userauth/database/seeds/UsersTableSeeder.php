<?php

use Illuminate\Database\Seeder;
use App\User; //add

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    //add
	    $users = [
		    ["name"=>"test1","email"=>"test1@test.com","password"=>"pass1"],
		    ["name"=>"test2","email"=>"test2@test.com","password"=>"pass2"],
		    ["name"=>"test3","email"=>"test3@test.com","password"=>"pass3"]
		    ];
	    foreach ($users as $user) {
		    $u = new User;
		    $u->name = $user["name"];
		    $u->email = $user["email"];
		    $u->password = bcrypt($user["password"]);
		    $u->save();
	    }
    }
}
