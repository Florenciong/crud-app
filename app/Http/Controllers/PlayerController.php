<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    //function to show data
    public function index(){
        $players = Player::all();
        return view('players.index', ['players' => $players ]);
    }

    //function to create data
    public function create(){
        return view('players.create');
    }

    //function to store data to database
    public function store(Request $request) {
        $data = $request->validate([
            'name'=>'required',
            'sport'=>'required',
            'school'=>'required',
            'age'=>'required|numeric',
        ]);


        $newPlayer = Player::create($data);

        return redirect(route('player.index'));
    }

    //function to edit data
    public function edit(Player $player) {
        return view('players.edit' , ['player' => $player]);
    }

    //function to update data
    public function update(Player $player, Request $request){
        $data = $request->validate([
            'name'=>'required',
            'sport'=>'required',
            'school'=>'required',
            'age'=>'required|numeric',
        ]);

        $player->update($data);
        return redirect(route('player.index'))->with('success', 'Player edited successfully');
    }

    public function destroy(Player $player){
        $player->delete();

        return redirect(route('player.index'))->with('success','Player deleted successfully');
    }

}
