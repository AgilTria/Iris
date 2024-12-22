<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            [
                'nama_user' => 'Indra Styawantoro',
                'username' => 'administrator',
                'password' => Hash::make('123'),
                'role' => 'Administrator',
                'created_at'=> now(),
                'updated_at'=> now()
            ], 
            [
                'nama_user' => 'Anindira Nisaka Iswari',
                'username' => 'admin gudang',
                'password' => Hash::make('123'),
                'role' => 'Admin Gudang',
                'created_at'=> now(),
                'updated_at'=> now()
            ], 
            [
                'nama_user' => 'Arshaka Keenandra',
                'username' => 'kepala gudang',
                'password' => Hash::make('123'),
                'role' => 'Kepala Gudang',
                'created_at'=> now(),
                'updated_at'=> now()
            ]
        ]);
    }
}
