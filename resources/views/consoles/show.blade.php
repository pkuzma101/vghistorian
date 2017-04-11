@extends('layouts.app')
<title>{{ $console->name }}</title>
{{ Html::style( asset('css/console.css')) }}
{{ Html::style( asset('css/basic.css')) }}
<link href='http://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>

<style>
  body, html {
    height: 100%;
    background-image: url('{{ $console->console_pic }}'); 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    overflow: scroll;
  }
  div#title_page {
    background-image: url('../img/2600_title.png');
  }
  div#first_page {
    background-image: url('../img/2600_pg1.png');
  }
  div#second_page {
    background-image: url('../img/2600_pg2.png');
  }
  div#third_page {
    background-image: url('../img/2600_pg3.png');
  }
  div#fourth_page {
    background-image: url('../img/2600_pg4.png');
  }
  div#fifth_page {
    background-image: url('../img/2600_pg5.png');
  }
</style>
@section('content')
  {{ Html::script('js/modernizr.2.5.3.min.js') }}
  <section id="console_page">
    <ul id="subject_list">
      <li><a href="#" id="history">History</a></li>
      <li><a href="#" id="analysis">Analysis</a></li>
      <li><a href="#" id="games">Games</a></li>
    </ul>
    <article id="title_art">
      <div id="logo_box" class="intro_box">
        <span><img src="{{ $console->logo }}"></span>
      </div>
    </article>
    <article id="text_box"></article>
    <article id="screenshot_box">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="{{ $console->controller_pic }}" class="carousel_pic">
            <div class="carousel-caption">
              2600 Controller
            </div>
          </div>
          <div class="item">
            <img src="{{ $console->jap_pic }}" class="carousel_pic">
            <div class="carousel-caption">
              Japanese Version
            </div>
          </div>
          <div class="item">
            <img src="{{ $console->pal_pic }}" class="carousel_pic">
            <div class="carousel-caption">
              European Version
            </div>
          </div>
          ...
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </article>
  </section>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script type="text/javascript">
    function loadApp() {
      // Create the flipbook
      $('.flipbook').turn({
        // Width
        width:922,
        // Height
        height:600,
        // Elevation
        elevation: 50,
        // Enable gradients
        gradients: true,
        // Auto center this flipbook
        autoCenter: true
      });
    }
  </script>
  <script type="text/javascript">
    $('#history').click(function() {
      // empty out any content already there
      $('#text_box').empty();
      // create the flipbook elements, then run JS to make pages turn on clicks 
      $('#text_box').append('<div class="flipbook-viewport" id="main_flipbook"></div>');
      $('#main_flipbook').append('<div class="container" id="flipbook_container"</div>');
      $('#flipbook_container').append('<div class="flipbook" id="actual_flipbook"></div>');
      $('#actual_flipbook').append('<div id="title_page"></div>');
      $('#actual_flipbook').append('<div id="first_page"></div>');
      $('#actual_flipbook').append('<div id="second_page"></div>');
      $('#actual_flipbook').append('<div id="third_page"></div>');
      $('#actual_flipbook').append('<div id="fourth_page"></div>');
      $('#actual_flipbook').append('<div id="fifth_page"></div>');

      yepnope({
        test : Modernizr.csstransforms,
        yep: ['../js/turn.js'],
        nope: ['../js/turn.html4.min.js'],
        both: ['../css/basic.css'],
        complete: loadApp
      });
    });
  </script>
  <script type="text/javascript">

  </script>
@endsection
