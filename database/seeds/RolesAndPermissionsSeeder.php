<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'index.bahan']);
        Permission::create(['name' => 'add.bahan']);
        Permission::create(['name' => 'edit.bahan']);
        Permission::create(['name' => 'delete.bahan']);

        Permission::create(['name' => 'index.pengajuan-bahan']);
        Permission::create(['name' => 'add.pengajuan-bahan']);
        Permission::create(['name' => 'edit.pengajuan-bahan']);
        Permission::create(['name' => 'delete.pengajuan-bahan']);

        Permission::create(['name' => 'index.user']);
        Permission::create(['name' => 'add.user']);
        Permission::create(['name' => 'edit.user']);
        Permission::create(['name' => 'delete.user']);

        // create roles and assign created permissions
        $role = Role::create(['name' => 'guest'])->givePermissionTo(['index.bahan']);
        $role = Role::create(['name' => 'peneliti'])
            ->givePermissionTo(
                [
                    'index.bahan',
                    'add.bahan',
                    'index.pengajuan-bahan'
                ]
            );

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());
    }
}
