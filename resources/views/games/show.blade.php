@extends('layouts.app')
<title>{{ $game->name }}</title>
{{ Html::style( asset('css/game.css')) }}
@section('content')
<section id="game_page">
  <h1 id="game_name">{{{ $game->name }}}</h1>
  <div id="media_box">
    <span><img src="{{ $game->box_art }}"></span>
    <span><img src="{{ $game->physical_pic }}"></span>
  </div>
  <article id="synopsis_box">
    <div id="history_box">
      <p><?php echo nl2br($game->synopsis); ?></p>
    </div>
  </article>
  <article id="screenshot_box">
    <div id="screenshot_div">
      <span><img src="{{ $game->screenshot1 }}" data-toggle="tooltip" data-placement="left" title="Arcade version"></span>
      <span><img src="{{ $game->screenshot2 }}" data-toggle="tooltip" data-placement="left" title="2600 version"></span>
    </div>
  </article>
</section>
<script type="text/javascript">
  $(function() {
    // set up tooltip functionality
    $('[data-toggle="tooltip"]').tooltip();
  });
</script>
@endsection