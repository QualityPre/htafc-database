<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        return view('players.index', [
            'players' => Player::all()
        ]);
    }
    public function show(Player $player)
    {
        return view('players.show', [
            'player' => $player
        ]);
    }
}
