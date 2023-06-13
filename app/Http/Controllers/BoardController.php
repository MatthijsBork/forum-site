<?php

namespace App\Http\Controllers;

use App\Models\Board;  // Replace this with your actual Board model namespace
use Illuminate\Http\Request;

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
        $board = Board::where('slug', $slug)->first();

        if (!$board) {
            abort(404);
        }

        return view('board', ['board' => $board]);
    }
}
