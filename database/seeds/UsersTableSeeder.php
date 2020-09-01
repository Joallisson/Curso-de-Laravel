<?php

use App\Models\User;
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

        factory(App\User::class, 10)->create();


        /*
        factory(App\User::class, 50)->create()->each(function ($user) {
            $user->posts()->save(factory(App\Post::class)->make());
        });


        User::create([
            'name' => 'Jhony Blaze',
            'email' => 'joallissons@gmail.com',
            'password' => bcrypt('123456'),
        ]); 
        */    
    }
}
