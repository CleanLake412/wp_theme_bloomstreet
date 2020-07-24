var getDevice = (function(){
    var ua = navigator.userAgent;
    if(ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0){
        return 'sp';
    }else if(ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0){
        return 'tab';
    }else{
        return 'other';
    }
})();
$(".sp_ham").click(function () {
  $(this).find('.menu-trigger').toggleClass("active");
    $("header.general .navz").slideToggle();
});
//
$(".asia .main_stage .past_year h3").click(function () {
  $(this).toggleClass("active");
    $(".asia .main_stage .past_year nav").slideToggle();
});
//
if( getDevice == 'sp' ){
  
$(".accordion_icon").on("click", function() {
$(this).parent().find('.dropdwn_menu').slideToggle(); 
if ($(this).hasClass('active')) {     
$(this).removeClass('active');        
}
else {
$(this).addClass('active');     
}     
});
  
} else{

$(function() {
var nav = $('header.general .navz .list ul');
$('li', nav)
.mouseover(function(e) {
$('ul', this).stop().slideDown('fast');
})
.mouseout(function(e) {
$('ul', this).stop().slideUp('fast');
});
});
  
} 
//
$(function(){
if( getDevice == 'sp' ){
  var setz = 80
}else{
  var setz = 0
} 
  $('a[href^="#"]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - setz;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});
//
$(function() {
  var pagetop = $('#go_top');
       pagetop.click(function () {
           $('body, html').animate({ scrollTop: 0 }, 500);
              return false;
   });
});
//
$(function() {  
  var $win = $(window),
    $go_top = $('#go_top');
  $win.on('load scroll', function() {
  var value = $(this).scrollTop();
    if ( value > 300 ) {
    $go_top.addClass('vis');
    } else {
    $go_top.removeClass('vis');
      }
  });
});

$(function() {  
$(".dropdwn_menu a").on('click', function () {
  $('.menu-trigger').removeClass("active");
    if ($( window ).width() <= 767) {
        $("header.general .navz").slideToggle();
    } else {
      $('.dropdwn_menu').hide();
    }
  return;
});
});