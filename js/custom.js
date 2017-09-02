
$(window).scroll(function() {
  var scrollTop = $(this).scrollTop();

  $('.swiper-fade').css({
    opacity: function() {
      var elementHeight = $(this).height();
        opacity = ((1 - ( scrollTop-elementHeight) / elementHeight) * 0.5);


    return opacity;    }
  }
  );
  $('.swiper-fade2').css({
    opacity: function() {
      var elementHeight = $(this).height();
        opacity = ((0.1 - ( scrollTop-elementHeight) / elementHeight) * 0.5);


    return opacity;    }
  }
  );

});
