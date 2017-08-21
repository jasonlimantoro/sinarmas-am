// FOR BACK TO TOP BUTTON
var offset = 900; // the scroll point where the button will appear
var duration = 500; // the animation of fade-in and fade-out

$(window).scroll(function() {
    if ($(this).scrollTop() > offset) {
        $('.back-to-top').fadeIn(duration);
    } 
    else {
        $('.back-to-top').fadeOut(duration);
    }
});

$('.back-to-top').click(function(event) {
    event.preventDefault();
    $('html, body').animate({scrollTop: 0}, duration);
    return false;
});
