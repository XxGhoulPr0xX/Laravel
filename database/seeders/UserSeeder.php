<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\User;
Use Illuminate\Support\Str;  //libreria para generar datos aleatorios

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::create(['name' => 'user1',
                      'email' => 'user1@gmail.com',
                      'password' => bcrypt('12345'),
                      'profession_id' => '1',
                      ]);
        User::create(['name' => 'user2',
                      'email' => 'user2@gmail.com',
                      'password' => bcrypt('12345'),
                      'profession_id' => '2',
                      ]);
        User::create(['name' => 'user3',
                      'email' => 'user3@gmail.com',
                      'password' => bcrypt('12345'),
                      'profession_id' => '3',
                      ]);
        User::create(['name' => 'user4',
                      'email' => 'user4@gmail.com',
                      'password' => bcrypt('12345'),
                      'profession_id' => '4',
                      ]);
                      

        $cadenaRandom=Str::random(0);
        User::create(['name' =>$cadenaRandom,
                      'email' =>$cadenaRandom.'4@mail.com',
                      'password' =>bcrypt('12345'),
                      'profession_id'=>4,
                    ]);
    }
}