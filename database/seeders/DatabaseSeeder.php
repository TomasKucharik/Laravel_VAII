<?php

namespace Database\Seeders;

use App\Models\Pokedex;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.admin',
            'password' => Hash::make('Password')
        ]);

        //\App\Models\Pokedex::factory(10)->create();

         \App\Models\User::factory(10)->create();
//         \App\Models\Pokedex::factory(10)->create();
    }
}
