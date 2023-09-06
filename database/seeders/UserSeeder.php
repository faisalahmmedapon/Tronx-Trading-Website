<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
//            'email_verified_at' => now(),
        ]);

        $role = Role::find(1);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);

// just insert one user data
        $one_user = \App\Models\User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345678'),
//            'email_verified_at' => now(),
        ]);
        $one_user->assignRole('user');


        $users = array(
            ['name' => 'Thomas Henry',
                'email' => 'thomashenry@gmail.com',
                'password' => Hash::make('12345678'),
//                'email_verified_at' => now(),
            ], [
                'name' => 'Harrision Samuel',
                'email' => 'harrisionsamuel@gmail.com',
                'password' => Hash::make('12345678'),
//                'email_verified_at' => now(),
            ], [
                'name' => 'Alexandar James',
                'email' => 'alexandarjames@gmail.com',
                'password' => Hash::make('12345678'),
//                'email_verified_at' => now(),
            ],
        );
        foreach ($users as $user) {
            $user =  User::updateOrCreate($user);
            $user->assignRole('user');
        }

    }
}
