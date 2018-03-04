<?php

use Animex\Models\User;
use Illuminate\Database\Seeder;

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
            'first_name' => 'Daniel',
            'last_name' => 'Gonzalez Briseno',
            'username' => 'sonusbeat',
            'email' => 'sonusbeat@hotmail.com',
            'password' => bcrypt('secret'),
        ]);

        User::create([
            'first_name' => 'Pablo',
            'last_name' => 'Garcia Marquez',
            'username' => 'pablo5243',
            'email' => 'pablo5243@hotmail.com',
            'password' => bcrypt('secret'),
        ]);

        User::create([
            'first_name' => 'Fernando',
            'last_name' => 'Lopez Garza',
            'username' => 'fernando5785',
            'email' => 'fernando5785@hotmail.com',
            'password' => bcrypt('secret'),
        ]);

        User::create([
            'first_name' => 'Manuel',
            'last_name' => 'Magallanes Lopez',
            'username' => 'manuel482',
            'email' => 'manuel482@hotmail.com',
            'password' => bcrypt('secret'),
        ]);

        $this->command->info('Users Seeded');
    }
}
