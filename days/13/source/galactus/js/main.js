(function() {
  
  $('.menu-toggle').on('click', function() {
    $('#menu-primary > ul').toggleClass('toggled');
    $('#menu-primary > ul').stop().slideToggle();
  });
  
})();