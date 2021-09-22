
jQuery( document ).ready(function($) {
$('#cilent').slick({
dots: false,
arrows: true,
infinite: true,
speed: 1000,
slidesToShow: 3,
loop: true,
slidesToScroll: 1,
autoplay: false,
autoplaySpeed: 2000,
pauseOnHover: false,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 3,
speed: 1000,
slidesToScroll: 1,
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 2,
speed: 1000,
slidesToScroll: 1
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
speed: 1000,
slidesToScroll: 1
}
}
]
});
});
/*Back to top*/
var btn = $("#button");

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass("show");
  } else {
    btn.removeClass("show");
  }
});

btn.on("click", function (e) {
  e.preventDefault();
  $("html, body").animate({ scrollTop: 0 }, "300");
});
/*Back to top*/

/*Testimonials*/
jQuery( document ).ready(function($) {
$('#testimonials').slick({
dots: false,
arrows: false,
infinite: true,
speed: 2000,
slidesToShow: 1,
loop: true,
slidesToScroll: 1,
autoplay: true,
autoplaySpeed: 4000,
pauseOnHover: true,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 1,
speed: 1000,
slidesToScroll: 1,
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 1,
speed: 1000,
slidesToScroll: 1
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
speed: 1000,
slidesToScroll: 1
}
}
]
});
});
/*Testimonials*/

/*Testimonials*/
jQuery( document ).ready(function($) {
$('#slider-id').slick({
dots: false,
arrows: true,
infinite: true,
speed: 2000,
slidesToShow: 1,
loop: true,
slidesToScroll: 1,
autoplay: true,
autoplaySpeed: 4000,
pauseOnHover: true,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 1,
speed: 1000,
slidesToScroll: 1,
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 1,
speed: 1000,
slidesToScroll: 1
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
speed: 1000,
slidesToScroll: 1
}
}
]
});
});
/*Testimonials*/