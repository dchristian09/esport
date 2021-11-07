@extends('layouts.mainlayout')

@section('page_title')Team @endsection

@section('main_content')
<div class="container-fluid">
    <br>
    <h1 class="display-4">Team</h1>

    <div class="text-left" id="create">
        <a class="btn btn-success pull-left" href="{{ route('team.create') }}">Create Team</a>
    </div>

    <table class="table table-striped table-primary table-hover table-container" >
        <thead>
            <th> No </th>
            <th> Team Code </th>
            <th> Team Name </th>
            <th> Founder </th>
            <th> Team Motto </th>
            <th class="d-flex justify-content-center"> ACTIONS </th>
        </thead>
        <tbody>
            @php 
            $i = 1 
            @endphp
            @foreach($team as $team)
                <tr>
                    <td>{{ $i }}</td>
                    @php 
                    $i++ 
                    @endphp
                    <td>{{ $team['team_code'] }}</td>
                    <td>{{ $team['team_name'] }}</td>
                    <td>{{ $team['founder'] }}</td>
                    <td>{{ $team['motto'] }}</td>
                    <td class="text-center">
                        <form action="{{ route('team.destroy', $team->team_code) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('team.show', $team->team_code) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('team.edit', $team->team_code) }}">Edit</a>
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