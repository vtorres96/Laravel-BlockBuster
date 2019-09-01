<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Abirosvaldo",
            "email" => "abirosvaldo@gmail.com",
            "password" => bcrypt("123456")
        ]);

        User::create([
            "name" => "Teste",
            "email" => "teste@gmail.com",
            "password" => bcrypt("123456")
        ]);

        factory(User::class, 8)->create();
    }
}
