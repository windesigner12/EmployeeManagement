<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Country;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     
    //$this->call(CountriesTableSeeder::class);
    //$this->call(StatesTableSeeder::class);
    $this->call(CitiesTableSeeder::class);

      // Country::factory()->count(6)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}


