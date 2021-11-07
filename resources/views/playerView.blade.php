@extends('layouts.mainlayout')

@section('page_title')ViewPlayer @endsection

@section('main_content')
    <div class="container-fluid" id="view">
        <h1 class="row justify-content-center display-3">{{ $player['player_name'] }}</h1>
            <div id="details">
                <p><i>"{{ $player['nickname'] }}"</i></p>
                <p>Game: {{ $player['game'] }}</p>
                <p>Team: {{ $player->team->team_name }}</p>
            </div>
        <a href="/player" class="btn btn-primary" id="tombol">Back</a>
    </div>
@endsection