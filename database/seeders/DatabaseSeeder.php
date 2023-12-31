<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {

        $this->call([
            RoleSeeder::class,
            PermissionSeeder::class,
            UserSeeder::class,
            SettingSeeder::class,
            PaymentSeeder::class,
            CountrySeeder::class,
        ]);

    }
}
