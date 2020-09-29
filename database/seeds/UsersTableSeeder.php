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
        $user = App\User::create([
            'name' => 'Michael',
            'email' => 'firdaus_michael@yahoo.co.id',
            'password' => bcrypt('password'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/IMG_1777.jpg',
            'about' => 'lorem ipsum',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);

    }
}
