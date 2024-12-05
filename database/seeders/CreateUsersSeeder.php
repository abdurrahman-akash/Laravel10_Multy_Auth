<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan db:seed --class=CreateUsersSeeder
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'phone' =>'01303647863',
                'is_admin'=>'1',
                'status'=>'1',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'User',
                'email'=>'user@gmail.com',
                'phone' =>'01303647864',
                'is_admin'=>'0',
                'status'=>'1',
                'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
