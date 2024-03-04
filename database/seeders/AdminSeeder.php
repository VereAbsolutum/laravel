<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Remove all users ');
        User::truncate();

        $this->command->info('Create admin user ');
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'admin'
        ]);

        $this->command->info('User admin successfully created! ');
    }
}
