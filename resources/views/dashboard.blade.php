@extends('layouts.app')
{{ Html::style( asset('css/dashboard.css')) }}
@section('content')
<section id="dashboard_box">
  <article id="site_sumup">
    <div id="title_box">
      <h1>Video Game Historian</h1>
    </div>
    <div id="exp_div">
      <p>Where we tell the story of video games - one console at a time</p>
    </div>
  </article>
  <article id="timeline_box">
    <div id="year_div">
      <span>1970</span>
      <span id="current">2008</span>
    </div>
    <div id="timeline"></div>
  </article>
  <article id="journey_select_box">
    <div id="select_box">
      <h2>Start your journey by system or company?</h2>
      <div id="select_div">
          <select id="console_select" name="console_select" style="float: left;">
            <option value="nil">Select...</option>
            @foreach($consoles as $consoles)
              <option value="{{{ $consoles->id }}}">{{{ $consoles->name }}}</option>
            @endforeach
          </select>
          <select id="company_select" name="company_select" style="float: right;">
            <option value="nil">Select...</option>
            @foreach($companies as $company)
              <option value="{{{ $company->id }}}">{{{ $company->name }}}</option>
            @endforeach
          </select>
      </div>
    </div>
  </article>
</section>
<script>
  $(document).ready(function() {
    // create vertical lines for grid
    for (var i = 1970; i < 2009; i++) {
      $('div#timeline').append('<div class="vertical_line" id="year' + i +'"></div>');
    }

    // create system blocks on grid
    $('div#timeline').append('<div id="atari_2600" class="system_block">{{ HTML::link("consoles/8", "2600") }}</div>');
    $('div#timeline').append('<div id="nes" class="system_block">{{ HTML::link("consoles/9", "NES") }}</div>');
    $('div#timeline').append('<div id="genesis" class="system_block">{{ HTML::link("consoles/10", "Genesis") }}</div>');
    $('div#timeline').append('<div id="snes" class="system_block">Super NES</div>');
    $('div#timeline').append('<div id="ps1" class="system_block">Playstation</div>');
    $('div#timeline').append('<div id="n64" class="system_block">Nintendo 64</div>');

    // give select menus at bottom headers functionality
    $('#console_select').change(function() {
      var self = $(this);
      var console_id = self.children(":selected").val();
      if (console_id != "nil") { 
        window.location.href = "/vgh/public/consoles/" + console_id;
      }
    });
    
  });
</script>
@endsection