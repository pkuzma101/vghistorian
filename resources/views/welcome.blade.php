@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
                @if (Auth::check())

                <h1>Success!</h1>

                @endif
            </div>
        </div>
    </div>
</div>
@endsection
