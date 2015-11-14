

$(document).ready(function() { 
var randomcomment = Math.floor((Math.random()*3)+1-1);
    $("a.fancy").fancybox({
        autoSize : true,
        padding: 0,
        width: '100%',
        height: '100%',
        openEffect: 'fade',
        titleShow: false
    });
    
    $('#featured').orbit({
                 animation: 'vertical-slide',                  // fade, horizontal-slide, vertical-slide, horizontal-push
                 animationSpeed: 500,                // how fast animtions are
                 timer: true,            // true or false to have the timer
                 advanceSpeed: 10000,         // if timer is enabled, time between transitions 
                 pauseOnHover: true,        // if you hover pauses the slider
                 startClockOnMouseOut: true,    // if clock should start on MouseOut
                 bullets: true,
                 directionalNav: true      // manual advancing directional navs
             });
    $('ul.sf-menu').superfish({
                delay:       0,                            // one second delay on mouseout
                animation:     {opacity:'show'},   // an object equivalent to first parameter of jQuery’s .animate() method. Used to animate the submenu open
                animationOut:  {opacity:'hide'},   // an object equivalent to first parameter of jQuery’s .animate() method Used to animate the submenu closed
                speed:       'fast',                          // faster animation speed
                autoArrows:  true                            // disable generation of arrow mark-up
            });

    $(function () {
      var austDay = new Date();
      austDay = new Date( 2015, 6 - 1, 20);
      $('#myCountdown').countdown({until: austDay });
      $('#year').text(austDay);
  });

    $( "#CommentZone" ).load( CCM_BASE_URL + "/de/das-turnier/ihre-kommentare .guestBook-entry:lt(3):eq("+randomcomment+")", function() {
        $("<a href='"+CCM_BASE_URL + "/de/das-turnier/ihre-kommentare/"+"' class='comment_link'>Alle Kommentare</a>").appendTo( "#CommentZone" );
});

});



