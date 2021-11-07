@extends('layouts.mainlayout')

@section('page_title')UpdateTeam @endsection

@section('main_content')
    <div class="container-fluid" id="tengah">
        <h1 class="row justify-content-center display-4">Update Team</h1>
        <div id="form">
            <form action="{{ route('team.update', $team->team_code) }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Team Code: </label>
                    <input type="text" class="form-control" name="team_code" value="{{ $team->team_code }}" required>
                </div>
                <div class="form-group">
                    <label>Team Name: </label>
                    <input type="text" class="form-control" name="team_name" value="{{ $team->team_name }}" required>
                </div>
                <div class="form-group">
                    <label>Founder: </label>
                    <input type="text" class="form-control" name="founder" value="{{ $team->founder }}" required>
                </div>
                <div class="form-group">
                    <label>Motto: </label>
                    <input type="text" class="form-control" name="motto" value="{{ $team->motto }}" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Edit Team</button>
                </div>
            </form>
        </div>
    </div>
@endsection