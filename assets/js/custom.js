$('.ots-slider .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    items:1,
    dots:false,
    navText:["<div class='nav-btn prev-slide'><p>Previous</p></div>","<div class='nav-btn next-slide'><p>Next</p></div>"]
});

// Home Page Main Banner Slider
$('.mbs-img .owl-carousel').owlCarousel({
    loop:true,
    nav:true,
    items:1,
    dots:false,
    navText:["<div class='nav-btn prev-slide'><p>Previous</p></div>","<div class='nav-btn next-slide'><p>Next</p></div>"]
});

// Custom Cabinets Page Slider
$('.ccs-slider .owl-carousel').owlCarousel({
    loop:true,
    nav:true,
    items:1,
    dots:false,
    navText:["<div class='nav-btn prev-slide'><p>Previous</p></div>","<div class='nav-btn next-slide'><p>Next</p></div>"]
});


//Search Bar
$('.search-icon').click(function(){
    $('.searchbar-area').toggleClass('search-active');
});


//Mobile Menu ACtive
$('.mobile-bar').click(function(){
    $('.header-menu ul').toggleClass('active-menu');
});