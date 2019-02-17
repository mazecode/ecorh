<?php

use Illuminate\Database\Seeder;

use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Admin',
            'email' => 'diego.feliud@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'), // $2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str_random(10),
        ]);

        $role = Role::create([
            'name' => 'Administrator',
            'slug' => 'admin',
            'description' => 'Administrator Role',
            'special' => 'all-access'
        ]);

        factory(User::class, 5)->create();
    }
}
