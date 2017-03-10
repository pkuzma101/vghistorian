$(document).ready(function() {
  $('.gallery_pic').click(function() {
    var src = $(this).attr('src');
    $('div#featured_pic').slideDown("slow", function() {
      $('div#featured_pic').css('background', 'url('+src+') no-repeat');
      $('div#featured_pic').css('background-size', 'cover');
    });
  });
});