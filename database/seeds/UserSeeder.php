<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','sajedulkhairul@gmail.com');
        if(!is_null($user)){

            $user = new User();
            $user->name = "sajedu islam";
            $user->email = "sajedulkhairul@gmail.com";
            $user->password = Hash::make('12345678');
            $user->save();
        }
   
    }
}
