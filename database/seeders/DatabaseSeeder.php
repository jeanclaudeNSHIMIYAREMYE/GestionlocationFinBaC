<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Créez 10 utilisateurs
        User::factory()->count(10)->create();

        // Insertion des rôles
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
          
        ]);

      
        User::find(1)->roles()->attach(1);
       User::find(2)->roles()->attach(2);
       User::find(3)->roles()->attach(2);
       User::find(3)->roles()->attach(1);
        
    }
}