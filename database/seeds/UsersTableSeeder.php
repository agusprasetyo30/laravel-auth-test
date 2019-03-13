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
            'name' => 'Agus Prasetyo',
            'email' => 'agusprasetyo1889@gmail.com',
            'password' => bcrypt('secret'),
            'status' => true
        ]);
    }
}
