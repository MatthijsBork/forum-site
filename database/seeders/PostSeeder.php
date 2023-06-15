<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Board;

class PostSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();
        $boards = Board::all();

        if ($users->isEmpty() || $boards->isEmpty()) {
            echo "No users or boards to attach posts to. Please run UserSeeder and BoardSeeder first.";
            return;
        }

        foreach ($users as $user) {
            foreach ($boards as $board) {
                Post::create([
                    'user_id' => $user->id,
                    'board_id' => $board->id,
                    'title' => 'test post',
                    'content' => 'this post is just to test the forum',
                ]);
            }
        }
    }
}
