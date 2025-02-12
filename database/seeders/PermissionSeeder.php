<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   
        public function run()
        {
            $permissions = [
                ['name' => 'create-role', 'guard_name' => 'web'],
                ['name' => 'edit-role', 'guard_name' => 'web'],
                ['name' => 'delete-role', 'guard_name' => 'web'],
                ['name' => 'create-user', 'guard_name' => 'web'],
                ['name' => 'edit-user', 'guard_name' => 'web'],
                ['name' => 'delete-user', 'guard_name' => 'web'],
                ['name' => 'create-product', 'guard_name' => 'web'],
                ['name' => 'edit-product', 'guard_name' => 'web'],
                ['name' => 'delete-product', 'guard_name' => 'web'],
                
                // Ajoutez d'autres permissions ici
            ];
    
            foreach ($permissions as $permission) {
                Permission::firstOrCreate(
                    ['name' => $permission['name'], 'guard_name' => $permission['guard_name']]
                );
            }
        }
}