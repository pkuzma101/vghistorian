@extends('layouts.app')
<title>Create Game</title>
<link rel="stylesheet" href="../css/create.css" type="text/css">
@section('content')
@if (Auth::check())

  {{{ Form::open(array('action' => 'GameController@store', 'files' => true)) }}}
    <h1>Insert a New Game</h1>
    {{{ Form::label('name', 'Name') }}}
    {{{ Form::text('name') }}}
    <br>
    {{{ Form::label('publisher', 'Publisher') }}}
    {{{ Form::text('publisher') }}}
    <br>
    {{{ Form::label('developer', 'Developer') }}}
    {{{ Form::text('developer') }}}
    <br>
    {{{ Form::label('console_id', 'Console') }}}
    <select name="console_id" id="console_id">
      @foreach($consoles as $console)
        <option value="{{{ $console->id }}}">{{{ $console->name }}}</option>
      @endforeach
    </select>
    <br>
    {{{ Form::label('box_art', 'Box Art') }}}
    {{{ Form::file('box_art') }}}
    <br>
    {{{ Form::label('physical_pic', 'Physical Pic') }}}
    {{{ Form::file('physical_pic') }}}
    <br>
    {{{ Form::label('synopsis', 'Synopsis') }}}
    {{{ Form::textarea('synopsis') }}}
    <br>
    {{{ Form::label('na_release_date', 'America Release Date') }}}
    {{{ Form::text('na_release_date') }}}
    <br>
    {{{ Form::label('jap_release_date', 'Japan Release Date') }}}
    {{{ Form::text('jap_release_date') }}}
    <br>
    {{{ Form::label('pal_release_date', 'PAL Release Date') }}}
    {{{ Form::text('pal_release_date') }}}
    <br>
    {{{ Form::label('screenshot1', 'Screenshot 1') }}}
    {{{ Form::file('screenshot1') }}}
    <br>
    {{{ Form::label('screenshot2', 'Screenshot 2') }}}
    {{{ Form::file('screenshot2') }}}
    {{ Form::submit('Submit') }}
  {{{ Form::close() }}}

@endif
@endsection