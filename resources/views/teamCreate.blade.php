@extends('layouts.mainlayout')

@section('page_title')CreateTeam @endsection

@section('main_content')
    <div class="container-fluid" id="tengah">
        <h1 class="row justify-content-center display-4">Create New Team</h1>
        <div id="form">
            <form action="{{ route('team.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Team Code: </label>
                    <input type="text" class="form-control" name="team_code" required>
                </div>
                <div class="form-group">
                    <label>Team Name: </label>
                    <input type="text" class="form-control" name="team_name" required>
                </div>
                <div class="form-group">
                    <label>Founder: </label>
                    <input type="text" class="form-control" name="founder" required>
                </div>
                <div class="form-group">
                    <label>Motto: </label>
                    <input type="text" class="form-control" name="motto" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Make Team</button>
                </div>
            </form>
        </div>
    </div>
@endsection