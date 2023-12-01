<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        public function run()
        {
    
            Role::create([
                'role_name' => 'superadmin',
            ]);
    
            Role::create([
                'role_name' => 'purchasing',
            ]);
            Role::create([
                'role_name' => 'masterdata',
            ]);
            Role::create([
                'role_name' => 'aprv1',
            ]);
            Role::create([
                'role_name' => 'aprv2',
            ]);
            
            User::factory(5)->create();
        }
    }
}
