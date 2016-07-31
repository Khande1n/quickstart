@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                    <h1>Quiz</h1>
                </div>
                <div class="panel-body">
                    <h3>
                        Q1. What is your name?
                    </h3>
                    <ul>
                        <li>
                            Hindi
                        </li>
                        <li>
                            Bindi
                        </li>
                    </ul>
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
