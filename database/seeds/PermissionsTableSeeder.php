<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //! Users permissions
        Permission::create([
            'name' => 'Users List',
            'slug' => 'users.index',
            'description' => 'List all users system',
        ]);
        Permission::create([
            'name' => 'User show',
            'slug' => 'users.show',
            'description' => 'View user\'s detail',
        ]);
        // Permission::create([
        //     'name' => 'User Create',
        //     'slug' => 'users.create',
        //     'description' => 'Create an user',
        // ]);
        Permission::create([
            'name' => 'User Update',
            'slug' => 'users.update',
            'description' => 'Update an user',
        ]);
        Permission::create([
            'name' => 'User Destroy',
            'slug' => 'users.destroy',
            'description' => 'Delete an user',
        ]);

        //! Roles Permissions
        Permission::create([
            'name' => 'Roles List',
            'slug' => 'roles.index',
            'description' => 'List all roles system',
        ]);
        Permission::create([
            'name' => 'User show',
            'slug' => 'roles.show',
            'description' => 'View role\'s detail',
        ]);
        Permission::create([
            'name' => 'Role Create',
            'slug' => 'roles.create',
            'description' => 'Create an role',
        ]);
        Permission::create([
            'name' => 'Role Update',
            'slug' => 'roles.update',
            'description' => 'Update an role',
        ]);
        Permission::create([
            'name' => 'Role Destroy',
            'slug' => 'roles.destroy',
            'description' => 'Delete an role',
        ]);
    }
}
