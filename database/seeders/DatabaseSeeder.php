<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin',
            'password' => Hash::make('123')
        ]);

        DB::table('subjects')->insert(['subject' => 'test']);
        DB::table('cities')->insert(['city' => 'Monclova']);
        DB::table('education_levels')->insert(['level' => 'Primaria']);
        DB::table('responsables')->insert(['name' => 'Tutor']);
        DB::table('statuses')->insert(['status' => 'Created']);
    }
}
