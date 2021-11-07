<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active_home = "";
        $active_team = "active";
        $active_player = "";

        $team = Team::all();

        return view('team', compact('active_home', 'active_team', 'active_player', 'team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active_home = "";
        $active_team = "active";
        $active_player = "";
        return view('teamCreate', compact('active_home', 'active_team', 'active_player'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Team::create([
            'team_code' => $request->team_code,
            'team_name' => $request->team_name,
            'founder' => $request->founder,
            'motto' => $request->motto,
        ]);
        return redirect(route('team.index'));
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
        $active_team = "active";
        $active_player = "";
        $team = Team::where('team_code', $id)->first();
        return view('teamView', compact('team','active_home', 'active_team', 'active_player'));
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
        $active_team = "active";
        $active_player = "";
        $team = Team::findOrFail($id);
        return view('teamEdit', compact('team','active_home', 'active_team', 'active_player'));
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
        $team = Team::findOrFail($id);
        $team->update([
            'team_code' => $request->team_code,
            'team_name' => $request->team_name,
            'founder' => $request->founder,
            'motto' => $request->motto,
        ]);
        return redirect(route('team.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();
        return redirect(route('team.index'));
    }
}
