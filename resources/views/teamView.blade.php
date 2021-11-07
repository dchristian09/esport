@extends('layouts.mainlayout')

@section('page_title')ViewTeam @endsection

@section('main_content')
    <div class="container-fluid">
        <div>
            <h1>{{ $team['team_name'] }}</h1>
            <div id="details">
                <p id="teamview"><b>Founder: </b>{{ $team['founder'] }}</p>
                <p id="teamview"><b>Motto: </b><i>{{ $team['motto'] }}</i></p>
                <a href="/team" class="btn btn-success" id="tombol">Back</a>
            </div>
            <h3>List Player:</h3>

            <table class="table table-striped table-primary table-hover table-container">
                <thead>
                    <tr>
                        <th> No </th>
                        <th> Player Code </th>
                        <th> Player Name </th>
                        <th> Nickname </th>
                        <th> Game </th>
                        <th> Team </th>
                    </tr>
                </thead>
                <tbody>
                    @php $index = 1 @endphp
                    @foreach ($team->player as $player)
                        <tr>
                            <th scope="row">{{ $index }}</th>
                            @php $index++ @endphp
                            <td>{{ $player['player_code'] }}</td>
                            <td>{{ $player['player_name'] }}</td>
                            <td>{{ $player['nickname'] }}</td>
                            <td>{{ $player['game'] }}</td>
                            <td>{{ $player->team->team_name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection