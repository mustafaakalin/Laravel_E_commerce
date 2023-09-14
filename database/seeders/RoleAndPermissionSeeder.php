<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'view articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);

        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'edit user']);
        Permission::create(['name' => 'delete user']);
        Permission::create(['name' => 'view user']);
        Permission::create(['name' => 'create role']);
        Permission::create(['name' => 'edit role']);
        Permission::create(['name' => 'delete role']);
        Permission::create(['name' => 'view role']);
        Permission::create(['name' => 'create permission']);
        Permission::create(['name' => 'edit permission']);
        Permission::create(['name' => 'delete permission']);
        Permission::create(['name' => 'view permission']);

        Permission::create(['name' => 'view admin dashboard']);
        Permission::create(['name' => 'view user dashboard']);
        Permission::create(['name' => 'view moderator dashboard']);
        Permission::create(['name' => 'view writer dashboard']);



        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'writer']);
        $role->givePermissionTo(['edit articles', 'delete articles', 'publish articles', 'unpublish articles']);

        $role = Role::create(['name' => 'user']);
        $role->givePermissionTo(['view user dashboard', 'view articles']);

        // or may be done by chaining
        $role = Role::create(['name' => 'moderator'])
            ->givePermissionTo(['publish articles', 'unpublish articles']);

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());


        $role = Role::create(['name' => 'admin'])->givePermissionTo(['create user', 'edit user', 'delete user', 'view user', 'create role', 'edit role', 'delete role', 'view role', 'create permission', 'edit permission', 'delete permission', 'view permission']);


        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'super-admin@example.com',
        ])->assignRole('super-admin');


        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ])->assignRole('admin');


        User::factory()->create([
            'name' => 'Writer',
            'email' => 'writer@example.com',
        ])->assignRole('writer');


        User::factory()->create([
            'name' => 'User',
            'email' => 'user@example.com',
        ])->assignRole('user');


        User::factory()->create([
            'name' => 'Moderator',
            'email' => 'moderator@example.com',
        ])->assignRole('moderator');
    }
}
