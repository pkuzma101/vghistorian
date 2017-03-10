@extends('layouts.app')
<title>Show {{ $console->id }}</title>
{{ Html::style( asset('css/console.css')) }}
@section('content')
<section id="console_page">
  <h1 id="console_name">{{{ $console->name }}}</h1>
  <div id="logo_box" class="intro_box">
    <span><img src="{{ $console->logo }}"></span>
  </div>
  <div id="console_pic_box" class="intro_box">
    <span><img src="{{ $console->console_pic }}"></span>
  </div>
  <article id="tabs_box">
    <div id="console_tabs">
      <ul>
        <li><a href="#console_tabs_1">History</a></li>
        <li><a href="#console_tabs_2">Analysis</a></li>
        <li><a href="#console_tabs_3">Games</a></li>
      </ul>
      <div id="tab_text">
        <div id="console_tabs_1">
          <div id="history_box">
            <p id="history_text">{{{ $console->history }}}</p>
          </div>
        </div>
        <div id="console_tabs_2">
          <div id="analysis_box">
            <p id="analysis_text">{{{ $console->analysis }}}</p>
          </div>
        </div>
        <div id="console_tabs_3">
          <div id="games_box">
            <?php // stuff will go here when I figure out how to sort games ?>
          </div>
        </div>
      </div>
    </div>
  </article>
  <article id="summary_box">
    <h2>In Summary...</h2>
    <table id="summary_table">
      <tr><td>Manufacturer</td><td>{{{ $console->company_name }}}</td></tr>
      <tr><td>Released</td><td>{{{ $console->start_date }}}</td></tr>
      <tr><td>Discontinued</td><td>{{{ $console->end_date }}}</td></tr>
      <tr><td>Generation</td><td>{{{ $console->generation }}}</td></tr>
      <tr><td>Medium</td><td>{{{ $console->medium }}}</td></tr>
      <tr><td>Estimated Worldwide Sales</td><td>{{{ $console->sales }}}</td></tr>
    </table>
  </article>
  <article id="gallery">
    <div id="featured_pic"></div>
    <table id="photo_table">
      <tr>
        <td><img src="{{ $console->controller_pic }}" class="gallery_pic" data-toggle="tooltip" data-placement="left" title="North American version"></td>
        <td><img src="{{ $console->jap_pic }}" class="gallery_pic" data-toggle="tooltip" data-placement="left" title="Japanese version"></td>
        <td><img src="{{ $console->pal_pic }}" class="gallery_pic" data-toggle="tooltip" data-placement="left" title="PAL version"></td>
      </tr>
    </table>
  </article>
</section>
{{ Html::script('js/jquery-ui.min.js') }}
{{ Html::script('js/feature.js') }}
<script type="text/javascript">
  // set up tab functionality
  $(function() {
    $('#console_tabs').tabs();

    // set up tooltip functionality
    $('[data-toggle="tooltip"]').tooltip();
  });
</script>
@endsection
