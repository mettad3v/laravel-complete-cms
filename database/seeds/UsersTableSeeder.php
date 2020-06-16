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
        $user = User::where('email', 'sixtus402@gmail.com')->first();

        if (!$user) {
            User::create([
                'name' => 'Scarlet Crush',
                'email' => 'sixtus402@gmail.com',
                'role' => 'admin',
                'password' => Hash::make('infernoone')
            ]);
        }
    }
}
