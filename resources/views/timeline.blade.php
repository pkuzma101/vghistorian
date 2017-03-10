@extends('master')
<title>Timeline</title>
<link rel="stylesheet" href="css/timeline.css" type="text/css">
@section('content')
<section id="timeline_box">
    <div id="timeline_div">
      <ul id="gen_line"></ul>
      <ul id="timeline"></ul>
    </div>
</section>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
  $(document).ready(function() {
    // create the years of the timeline
    for (i = 1967; i < 2018; i++) {
      $('ul#timeline').append('<li id="'+ i + '"><div class="bubble"><div class="year">'+ i + '</div></div></li>');

      // create bubble for atari 2600
      // if (i == 1977) {
      //   $('li#' + i).append('<span class="system_pic"><img src="img/Atari2600.png" style="height:100%; width:100%;"/></span>');
      // }
    }

    // create years for generation spans
    for (j = 1967; j < 2018; j++) {
      $('ul#gen_line').append('<li id="' + j + '"></li>');

      // first generation 
      if (j == 1973 || j == 1974 || j == 1975 || j == 1976 || j == 1977 || j == 1978 || j == 1979 ) {
        $('li#' + j).css("background-color", "green");
      }

      // second generation
      if (j == 1983 || j == 1979 || j == 1980 || j == 1981 || j == 1982) {
        $('li#' + j).css("background-color", "orange");
      }

      // third generation
      if (j == 1988 || j == 1984 || j == 1985 || j == 1986 || j == 1987) {
        $('li#' + j).css("background-color", "red");
      }
    }

    // 
  });
</script>
@endsection
