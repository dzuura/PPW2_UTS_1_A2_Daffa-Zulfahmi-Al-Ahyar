<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class playerController extends Controller
{
    public function index()
    {
        $data_player = Player::all()->sortByDesc('id');
        $no = 0;
        return view('index', compact('data_player', 'no')); //rawan
    }

    public function create()
    {
        //
    }

    public function store(Request $request) //rawan Request
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id) //rawan Request
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
