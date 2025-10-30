<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //crear un usuario default al crear las tablas
        $user = new User();

        $user->name = 'Cristian Ventura';
        $user->email = 'thebig.insolente@gmail.com';
        $user->password = bcrypt('cristian');

        $user->save();

        User::factory(10)->create();
    }
}
