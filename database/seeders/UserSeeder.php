<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superadmin = Role::create(['name' => 'Superadministrador']);
        $admin = Role::create(['name' => 'Administrador']);



        $user2 = User::factory()->create([
            'name' => 'Diego Hurtado Vargas',
            'email' => 'diego@gmail.com',
            'password' => bcrypt('1234'),
            'unidad_id' => 1,
        ]);
        $user2->assignRole('Superadministrador');

        $user3 = User::factory()->create([
            'name' => 'Erwin Prieto Pocholi',
            'email' => 'erwin@gmail.com',
            'password' => bcrypt('1234'),
            'unidad_id' => 1,
        ]);
        $user3->assignRole('Administrador');

        $user4 = User::factory()->create([
            'name' => 'David Lijeron',
            'email' => 'davidlijeron@gmail.com',
            'password' => bcrypt('1234'),
            'unidad_id' => 4,
        ]);
        $user4->assignRole('Superadministrador');

    }
}
