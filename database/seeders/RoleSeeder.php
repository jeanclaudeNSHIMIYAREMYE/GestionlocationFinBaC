<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Admin']);
        $proprietaire = Role::create(['name' => 'proprietaire']);
        $locataire= Role::create(['name' => 'locataire']);

        $proprietaire->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user',
            'create-product',
            'edit-product',
            'delete-product'
        ]);

       $locataire->givePermissionTo([
            'create-product',
            'edit-product',
            'delete-product'
        ]);
    }
}
