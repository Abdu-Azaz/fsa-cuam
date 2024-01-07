<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $superadminRole = Role::create(['name' => 'Super Admin']);
        // $standardRole = Role::create(['name' => 'standard']);
        $superadminRole->givePermissionTo(Permission::all());
        $superadmin = User::create([
            'name' => 'abdoo',
            'email' => 'abdoo@gmail.com',
            'password' => bcrypt('rooty'),
        ]);
        $superadmin->assignRole('Super Admin');
        // $user = User::create([
        //     'name' => 'user',
        //     'email' => 'user@gmail.com',
        //     'password' => bcrypt('rooty'),
        // ]);
        // // Assign the "superadmin" role to a user
        // $user->assignRole('standard');
        // this can be done as separate statements
        // $role = Role::create(['name' => 'writer']);
        // $role->givePermissionTo('edit articles');

        // // or may be done by chaining
        // $role = Role::create(['name' => 'moderator'])
        //     ->givePermissionTo(['publish articles', 'unpublish articles']);


    }
}
