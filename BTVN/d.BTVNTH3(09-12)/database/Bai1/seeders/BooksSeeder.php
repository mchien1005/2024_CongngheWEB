<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('books')->insert([
            ['title' => 'Clean Code', 'author' => 'Robert C. Martin', 'publication_year' => 2008, 'genre' => 'Programming', 'library_id' => 1],
            ['title' => 'Introduction to Algorithms', 'author' => 'Thomas H. Cormen', 'publication_year' => 2009, 'genre' => 'Algorithms', 'library_id' => 1],
            ['title' => 'Artificial Intelligence: A Modern Approach', 'author' => 'Stuart Russell', 'publication_year' => 2020, 'genre' => 'AI', 'library_id' => 2],
            ['title' => 'Database System Concepts', 'author' => 'Abraham Silberschatz', 'publication_year' => 2019, 'genre' => 'Databases', 'library_id' => 2],
        ]);
    }
}