jQuery(function() {

  // お知らせ入れ替え
  $('.ple-a').on('click',function(){
    $('.news-press-release').css('display', 'block');
    $('.news-group container').not('.news-press-release').css('display', 'none');
    $('.ple-a').addClass('active')
    $('.event-a').removeClass('active')
    $('.info-a').removeClass('active')
  });

  $('.event-a').on('click',function(){
    $('.news-event').css('display', 'block');
    $('.news-group container').not('.news-event').css('display', 'none');
    $('.event-a').addClass('active')
    $('.ple-a').removeClass('active')
    $('.info-a').removeClass('active')
  });

  $('.info-a').on('click',function(){
    $('.news-info').css('display', 'block');
    $('.news-group container').not('.news-info').css('display', 'none');
    $('.info-a').addClass('active')
    $('.event-a').removeClass('active')
    $('.ple-a').removeClass('active')
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