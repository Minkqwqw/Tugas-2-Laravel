<?php

namespace App\Models;

class Genre
{
    public static function all()
    {
        return [
            ['id' => 1, 'nama' => 'Sci-Fi'],
            ['id' => 2, 'nama' => 'Fantasy'],
            ['id' => 3, 'nama' => 'Horror'],
            ['id' => 4, 'nama' => 'Romance'],
            ['id' => 5, 'nama' => 'Thriller'],
        ];
    }
}