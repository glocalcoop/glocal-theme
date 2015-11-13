jQuery( document ).ready( function( $ ) {

	console.log( 'main.js loaded' );

    //BXSLIDER - RESPONSIVE SLIDER
    $('.home .home-posts').bxSlider({
            slideWidth: 5000,
            minSlides: 1,
            maxSlides: 1,
            slideMargin: 10,
            pager: false
    });

} );


