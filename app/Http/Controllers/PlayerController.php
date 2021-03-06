<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        return view('players.index', [
            'players' => Player::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }
    public function show(Player $player)
    {
        return view('players.show', [
            'player' => $player
        ]);
    }

    public function create()
    {
        return view('players.create');
    }
}
