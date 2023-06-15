<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;

class BoardController extends Controller
{
    /**
     * Display the specified board.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $board = Board::where('slug', $slug)->with('posts.user')->first();
        if (!$board) {
            return abort(404);
        }
        return view('board', ['board' => $board]);
    }
}
