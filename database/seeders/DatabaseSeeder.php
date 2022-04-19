<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::create([
            "name"     => "Administrador",
            "email"    => "admin@admin.com",
            "rol"      => "Administrador",
            "password" => bcrypt("UexrgHDfhi"),
        ]);
        \App\Models\User::create([
            "name"     => "Consultor",
            "email"    => "consultor@consultor.com",
            "rol"      => "Consultor",
            "password" => bcrypt("Hfhi2yh5"),
        ]);
    }
}
