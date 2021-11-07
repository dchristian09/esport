@extends('layouts.mainlayout')

@section('page_title')UpdatePlayer @endsection

@section('main_content')
    <div class="container-fluid" id="tengah">
        <h1 class="row justify-content-center display-4">Update Player</h1>
        <div id="form">
            <form action="{{ route('player.update', $player->id) }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Player Name: </label>
                    <input type="text" class="form-control" name="player_name" value="{{ $player->player_name }}" required>
                </div>
                <div class="form-group">
                    <label>Nickname: </label>
                    <input type="text" class="form-control" name="nickname" value="{{ $player->nickname }}" required>
                </div>
                <div class="form-group">
                    <label>Game: </label>
                    <input type="text" class="form-control" name="game" value="{{ $player->game }}" required>
                </div>
                <div class="form-group">
                    <label>Team: </label>
                    <select name="teams" class="custom-select">
                        <option value="{{ $player->team->team_code }}" selected hidden>{{ $player->team->team_name }}</option>
                        @foreach ($team as $team)
                            <option value="{{ $team['team_code'] }}">{{ $team['team_name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Edit Player</button>
                </div>
            </form>
        </div>
    </div>
@endsection