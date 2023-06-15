<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Board;

class BoardSeeder extends Seeder
{
    public function run(): void
    {
        $boards = [
            ['name' => 'Board 1', 'slug' => 'board-1', 'description' => 'Board one!', 'nsfw' => 0],
            ['name' => 'Board 2', 'slug' => 'board-2', 'description' => 'Board two!', 'nsfw' => 0],
            ['name' => 'Board 3', 'slug' => 'board-3', 'description' => 'Board three!', 'nsfw' => 0],
        ];

        foreach ($boards as $board) {
            Board::create($board);
        }
    }
}
