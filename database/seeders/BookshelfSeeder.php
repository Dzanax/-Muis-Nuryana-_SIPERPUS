<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("Bookshelfs")->insert([
            'code' => 'BS001',
            'name' => 'Mangga',
        ]);

        DB::table("Bookshelfs")->insert([
            'code' => 'BS002',
            'name' => 'Novel',
        ]);

        DB::table("Bookshelfs")->insert([
            'code' => 'BS003',
            'name' => 'Manhwa',
        ]);
    }
}
