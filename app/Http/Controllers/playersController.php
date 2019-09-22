<?php

namespace App\Http\Controllers;

use App\players;

use Illuminate\Http\Request;

class playersController extends Controller
{
    public function index()
    {

        $players = players::all();

        //    return $players;
        return view('players.index', compact('players'));
    }

    public function create()
    {

        return view('players.create');
    }

    public function store()
    {
        $players = new players();

        $players->firstname = request('firstname');
        $players->secondname = request('secondname');
        $players->team = request('team');
        $players->age = request('age');

        $players->save();

        return redirect('/players');
    }
}
