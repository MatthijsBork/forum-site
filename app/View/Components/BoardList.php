<?php

namespace App\View\Components;

use Closure;
use App\Models\Board;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class BoardList extends Component
{
    public $boards;

    public function __construct()
    {
        $this->boards = Board::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.board-list');
    }
}
