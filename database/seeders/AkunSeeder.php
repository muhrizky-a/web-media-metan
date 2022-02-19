<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'Admin',
                'email'=>'admin',
               'password'=> bcrypt('123456'),
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
