$(document).ready(function(){
	/* sliders inits */

	$(function() {
		var w = $(window).width();
  		if(w >= 1024) {
  			$('.slider-container').slick({
					slidesToShow: 3,
			  	slidesToScroll: 1
				});
  			$('.latest-stories_container_1').slick({
					slidesToShow: 4,
			  	slidesToScroll: 1,
			  	infinite: false
				});

				$('.stories_container_2_inner').slick({
					slidesToShow: 5,
			  	slidesToScroll: 1,
			  	infinite: false
				});

				$('.latest-stories_container_3').slick({
					slidesToShow: 4,
			  	slidesToScroll: 1,
			  	infinite: false
				});

				$('.latest-stories_container_4').slick({
					slidesToShow: 6,
			  	slidesToScroll: 1,
			  	infinite: false
				});

				$('.related_posts_container').slick({
					slidesToShow: 4,
			  	slidesToScroll: 1,
			  	infinite: false
				});
  		} else if(w < 1024) {
  			$('.slider-container').slick({
					slidesToShow: 1,
			  	slidesToScroll: 1
				});
  			$('.latest-stories_container_1').slick({
					slidesToShow: 3,
			  	slidesToScroll: 1,
			  	infinite: false
				});

				$('.stories_container_2_inner').slick({
					slidesToShow: 3,
			  	slidesToScroll: 1,
			  	infinite: false
				});

				$('.latest-stories_container_4').slick({
					slidesToShow: 3,
			  	slidesToScroll: 1,
			  	infinite: false
				});

				$('.related_posts_container').slick({
					slidesToShow: 3,
			  	slidesToScroll: 1,
			  	infinite: false
				});
  		}
	});
	/* sliders inits */


	/* control buttons */
	$('.menu-btn').on('click', function() {
		$('.overlay').fadeIn(200);
		$('.navigation-menu').addClass('open');
	});

	$('.close-button').on('click', function() {
		$('.overlay').fadeOut(200);
		$('.navigation-menu').removeClass('open');
	});
	/* control buttons */


	/* home slider title changing */
	$('.slider-container').on('beforeChange', function() {
		$('.intro-slider .slide-info .slide-category').fadeOut(100);
		$('.intro-slider .slide-info .slide-title').fadeOut(100);
		setTimeout(function() {
			$('.intro-slider .slide-info .slide-category span').remove();
			$('.intro-slider .slide-info .slide-title span').remove();
		}, 100);
	});

	$('.slider-container').on('afterChange', function() {
		var current_category = $('.slider-container .slick-current').next().attr('data-info-category');
		var current_title = $('.slider-container .slick-current').next().attr('data-info-title');
		var current_link = $('.slider-container .slick-current').next().attr('href');
		$('.intro-slider .slide-info .slide-category').prepend('<span>'+current_category+'</span>');
		$('.intro-slider .slide-info .slide-title').prepend('<span>'+current_title+'</span>');
		$('.intro-slider .slide-info').attr('href', current_link);
		$('.intro-slider .slide-info .slide-category').fadeIn(100);
		$('.intro-slider .slide-info .slide-title').fadeIn(100);
	});
	/* home slider title changing */


	/* images centering */
	$('.fit-images .image-container img').each(function() {
		var img_width = $(this).attr('width');
		var img_height = $(this).attr('height');
		if(img_height - img_width < 1) {
			$(this).addClass('width-aligner');
		}
	});
	/* images centering */

});