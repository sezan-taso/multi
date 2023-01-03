<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name' => 'test',
                'email' => 'test1@test.com',
                'password' => Hash::make('password'),
                'created_at' => '2023/01/03 12:12:12',
            ],
            [
                'name' => 'test',
                'email' => 'test2@test.com',
                'password' => Hash::make('password'),
                'created_at' => '2023/01/03 12:12:12',
            ],
            [
                'name' => 'test',
                'email' => 'test3@test.com',
                'password' => Hash::make('password'),
                'created_at' => '2023/01/03 12:12:12',
            ],
        ]);
    }
}
