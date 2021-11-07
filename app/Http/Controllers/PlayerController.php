<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active_home = "";
        $active_team = "";
        $active_player = "active";

        $player = Player::all();
        $team = Team::all();

        return view('player', compact('active_home', 'active_team', 'active_player', 'player', 'team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active_home = "";
        $active_team = "";
        $active_player = "active";
        $player = Player::all();
        $team = Team::all();
        return view('playerCreate', compact('active_home', 'active_team', 'active_player', 'player', 'team'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $code = Str::upper(Str::substr($request->player_name, 0, 3));

        Player::create([
            'player_code' => $code,
            'player_name' => $request->player_name,
            'nickname' => $request->nickname,
            'game' => $request->game,
            'teams' => $request->teams
        ]);
        return redirect(route('player.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $active_home = "";
        $active_team = "";
        $active_player = "active";
        $team = Team::all();
        $player = Player::where('player_code', $id)->first();
        return view('playerView', compact('active_home', 'active_team', 'active_player', 'player', 'team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active_home = "";
        $active_team = "";
        $active_player = "active";
        $player = Player::findOrFail($id);
        $team = Team::all();
        return view('playerEdit', compact('active_home', 'active_team', 'active_player', 'player', 'team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $code = Str::upper(Str::substr($request->player_name, 0, 3));
        $player = Player::findOrFail($id);
        $player->update([
            'player_code' => $code,
            'player_name' => $request->player_name,
            'nickname' => $request->nickname,
            'game' => $request->game,
            'teams' => $request->teams
        ]);
        return redirect(route('player.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Player::findOrFail($id);
        $player->delete();
        return redirect(route('player.index'));
    }
}
