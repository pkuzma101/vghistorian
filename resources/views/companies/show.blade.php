@extends('layouts.app')
<title>{{{ $company->name }}}</title>
{{ Html::style( asset('css/company.css')) }}
@section('content')
<section id="company_page">
  <article>
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
    
      </div>
    @endforeach
  </article>
</section>
<script type="text/javascript">
  $(document).ready(function() {
    $('div.console_card').hover(function() {
    
      });
    
  });
</script>
@endsection