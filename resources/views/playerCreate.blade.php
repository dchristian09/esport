@extends('layouts.mainlayout')

@section('page_title')CreatePlayer @endsection

@section('main_content')
    <div class="container-fluid" id="tengah">
        <h1 class="row justify-content-center display-4">Create New Player</h1>
        <div id="form">
            <form action="{{ route('player.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Player Name: </label>
                    <input type="text" class="form-control" name="player_name" required>
                </div>
                <div class="form-group">
                    <label>Nickname: </label>
                    <input type="text" class="form-control" name="nickname" required>
                </div>
                <div class="form-group">
                    <label>Game: </label>
                    <input type="text" class="form-control" name="game" required>
                </div>
                <div class="form-group">
                    <label>Team: </label>
                    <select name="teams" class="custom-select">
                        <option value="" selected disabled hidden>Choose team</option>
                        @foreach ($team as $team)
                            <option value="{{ $team['team_code'] }}">{{ $team['team_name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Make Player</button>
                </div>
            </form>
        </div>
    </div>
@endsection