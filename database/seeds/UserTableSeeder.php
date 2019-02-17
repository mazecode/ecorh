<?php

use Illuminate\Database\Seeder;
use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // How many genres you need, defaulting to 10
        $userCount = (int)$this->command->ask('How many users do you need ?', 10);

        $this->command->info("Creating {$userCount} users");

        // Create the Users
        $users = factory(User::class, $userCount)->create();

        if ($this->command->confirm('Do you need an admin user?')) {
            $user = User::create([
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

            $user->assignRole($role->id);

            // $role->assignPermission($user->id);
            // $role->save();

            $this->command->info("Admin created");
        }

        $this->command->info('Users Created!');
    }
}
