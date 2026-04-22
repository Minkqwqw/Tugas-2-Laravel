<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $author = Author::create([
            'name' => 'Tere Liye',
            'country' => 'Indonesia'
        ]);

        $author2 = Author::create([
            'name' => 'Andrea Hirata',
            'country' => 'Indonesia'
        ]);

        $books = ['Bumi', 'Bulan', 'Matahari', 'Bintang', 'Cerdas'];
        $books2 = ['Laskar Pelangi', 'Sang Pemimpi', 'Edensor', 'Laskar Pelangi'];

        foreach ($books as $title) {
            Book::create([
                'author_id' => $author->id,
                'title' => $title
            ]);
        }

        foreach ($books2 as $title) {
            Book::create([
                'author_id' => $author2->id,
                'title' => $title
            ]);
        }
    }
}