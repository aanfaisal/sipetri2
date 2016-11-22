<?php

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
        App\User::create([
            'name' => 'Admin',
            'email' => 'aan.faisalal@gmail.com',
            'password' => bcrypt('sipetri'),
            'role' => 'admin'
            ]);
        App\User::create([
            'name' => 'member',
            'email' => 'member@gmail.com',
            'password' => bcrypt('sipetri'),
            'role' => 'member'
            ]);
    }
}
