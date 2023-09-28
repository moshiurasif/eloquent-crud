<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // for ($i = 0; $i < 20; $i++) {
        //     DB::table('companies')->insert([
        //         'name' => Str::random(10),
        //         'email' => Str::random(10) . '@gmail.com',
        //         'address' => Str::random(10),
        //     ]);
        // }

        for ($i = 0; $i < 10; $i++) {
            Company::create([
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'address' => Str::random(10),
            ]);
        }

        // Query builder 
        // DB::table('companies')->insert([
        //     "name" => Str::random(10),
        // ]);

        // Eloquent
        // Company::create([
        //     "name" => Str::random(10)
        // ]);
    }
}
