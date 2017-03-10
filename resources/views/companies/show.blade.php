@extends('layouts.app')
<title>{{{ $company->name }}}</title>
{{ Html::style( asset('css/company.css')) }}
@section('content')
<section id="company_page">
  <article id="logo_article">
    <div id="logo_box">
      <img src="{{ $company->logo }}">
    </div>
  </article>
  <article id="synopsis_article">
    <div id="synopsis_box">
      <p>{{{ $company->synopsis }}}</p>
    </div>
  </article>
  <article id="systems_article">
    @foreach ($consoles as $console)
      <div class="console_card" id="{{ $console->name }}">
        <img src="{{ $console->console_pic }}" class="console_pic" />
        <span class="hover_square">
          <p>{{{ $console->name }}}</p>
        </span>
      </div>
    @endforeach
  </article>
</section>
<script type="text/javascript">
  $(document).ready(function() {
    $('div.console_card').hover(
      function() {
        $(this).closest('div.console_card').children('img.console_pic').css('opacity', '0.4');
        $(this).closest('div.console_card').children('span.hover_square').css("display", "block");
      }, 
      function() {
        $(this).closest('div.console_card').children('img.console_pic').css('opacity', '1');
        $(this).closest('div.console_card').children('span.hover_square').css("display", "none");
      });
  });
</script>
@endsection