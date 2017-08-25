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
             'name' => 'Huu hoa',
             'email' => 'huuhoa.developer@gmail.com',
             'password' => bcrypt('123456'),
             'admin' => 1
        	]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.jpg',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com',
            ]);
    }
}
