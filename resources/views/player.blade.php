@extends('layouts.mainlayout')

@section('page_title')Player @endsection

@section('main_content')
<div class="container-fluid">
    <br>
    <h1 class="display-4">Player</h1>

    <div class="text-left" id="create">
        <a class="btn btn-success pull-left" href="{{ route('player.create') }}">Create Player</a>
    </div>

    <table class="table table-striped table-primary table-hover table-container" >
        <thead>
            <th> No </th>
            <th> Player Code </th>
            <th> Player Name </th>
            <th> Nickname </th>
            <th> Game </th>
            <th> Team </th>
            <th class="d-flex justify-content-center"> ACTIONS </th>
        </thead>
        <tbody>
            @php 
            $i = 1 
            @endphp
            @foreach($player as $player)
                <tr>
                    <td>{{ $i }}</td>
                    @php 
                    $i++ 
                    @endphp
                    <td>{{ $player['player_code'] }}</td>
                    <td>{{ $player['player_name'] }}</td>
                    <td>{{ $player['nickname'] }}</td>
                    <td>{{ $player['game'] }}</td>
                    <td>
                        <a href="{{ route('team.show', $player->team->team_code) }}">
                            {{ $player->team->team_name }}
                        </a>
                    </td>
                    <td class="text-center">
                        <form action="{{ route('player.destroy', $player->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('player.show', $player->player_code) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('player.edit', $player->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
</div>
@endsection