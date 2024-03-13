jQuery(function() {

  // お知らせ入れ替え
  $('.ple-a').on('mouseover',function(){
    $('.ple-a').css('text-decoration', 'underline')
    $('#news-menu a').not('.ple-a').css('text-decoration', 'none'); 
  });

  $('.ple-a').on('click',function(){
    $('.news-pre-release').css('display', 'block');
    $('.news-group container').not('.news-pre-release').css('display', 'none');
  });

  $('.event-a').on('mouseover',function(){
    $('.event-a').css('text-decoration', 'underline')
    $('#news-menu a').not('.event-a').css('text-decoration', 'none'); 
  });

  $('.event-a').on('click',function(){
    $('.news-event').css('display', 'block');
    $('.news-group container').not('.news-event').css('display', 'none');
  });

  $('.info-a').on('mouseover',function(){
    $('.info-a').css('text-decoration', 'underline')
    $('#news-menu a').not('.info-a').css('text-decoration', 'none'); 
  });

  $('.info-a').on('click',function(){
    $('.news-info').css('display', 'block');
    $('.news-group container').not('.news-info').css('display', 'none');
  });

  // アニメーション
  $(window).on('load scroll', function() {
    $(".show").each(function() {
       var winScroll = $(window).scrollTop();
       var winHeight = $(window).height();
       var scrollPos = winScroll + (winHeight * 0.8);
       if($(this).offset().top < scrollPos) {
          $(this).css({opacity: 1, transform: 'translate(0, 0)'});
       }
    });
 });

});