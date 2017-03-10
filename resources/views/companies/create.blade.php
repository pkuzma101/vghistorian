@extends('master')
<title>Create Company</title>
<link rel="stylesheet" href="css/create.css" type="text/css">
@section('content')
@if (Auth::check())
  {{ Form::open(array('action' => 'CompanyController@store', 'files' => true)) }}
    <h1>Make a New Company</h1>
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name') }}
    <br>
    {{ Form::label('logo', 'Logo') }}
    {{ Form::file('logo') }}
    <br>
    {{ Form::submit('Submit') }}
  {{ Form::close() }}
@endif
@endsection

