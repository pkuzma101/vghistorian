@extends('layouts.app')
{{ Html::style( asset('css/dashboard.css')) }}
@section('content')
<section id="dashboard_box">
  <div id="title_box">
    <h1>Video Game Historian</h1>
  </div>
  <article id="timeline_box">
    <div id="year_div">
      <span>1970</span>
      <span id="current">2008</span>
    </div>
    <div id="timeline"></div>
  </article>
</section>
<script>
  $(document).ready(function() {
    // create vertical lines for grid
    for (var i = 1970; i < 2009; i++) {
      $('div#timeline').append('<div class="vertical_line" id="year' + i +'"></div>');
    }

    $('div#timeline').append('<div id="atari_2600" class="system_block">Atari 2600</div>');
    $('div#timeline').append('<div id="nes" class="system_block">NES</div>');
    $('div#timeline').append('<div id="genesis" class="system_block">Genesis</div>');
    $('div#timeline').append('<div id="snes" class="system_block">Super NES</div>');
    $('div#timeline').append('<div id="ps1" class="system_block">Playstation</div>');
    $('div#timeline').append('<div id="n64" class="system_block">Nintendo 64</div>');
    
  });
</script>
@endsection