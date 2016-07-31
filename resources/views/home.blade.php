@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div>
                    <input onclick="windowProxy1.post({'color':'red'})" type="submit" value="Color Frame1 Red" />
                    <input onclick="windowProxy2.post({'color':'yellow'})" type="submit" value="Color Frame2 Yellow" />
                </div>
                <div class="panel-heading">Dashboard</div>
                    <iframe id="loginFrame" name="loginFrame" src="http://brainplay.comxa.com/project1%20-%20Storyline%20output/story.html" width="980" height="658"></iframe>
                </div>
                <div class="panel-body">
                    You are logged in !
                </div>
                <div class="panel-footer">
                    <button class="bg-info">Previous</button>
                    <button>Next</button>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
