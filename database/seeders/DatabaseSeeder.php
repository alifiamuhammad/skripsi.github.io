<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user =[
            [

                'username' => 'user3',
                'password' => bcrypt('user1'),
                'level'=> 'admin',
            ],
            [

                'username' => 'user1',
                'password' => 'user2',
                'level'=> 'admin',
            ]
            ];
            foreach($user as $key => $value){
                User::create($value);
            }
    }
}
