jQuery(document).ready(function($) {

	// Initialize reference slider
	$('.reference_slider').slick({
	slidesToShow: 3,
	arrows: true,
	// prevArrow:"<img class='a-left control-c prev slick-prev' src='http://localhost/roland-finanse/wp-content/uploads/2022/07/left-long-solid.png'>",
	// nextArrow:"<img class='a-right control-c next slick-next' src='http://localhost/roland-finanse/wp-content/uploads/2022/07/right-long-solid.png'>",
		responsive: [
			{
			breakpoint: 1200,
			settings: {
				slidesToShow: 2
			},
			},
			{
			breakpoint: 768,
			settings: {
				slidesToShow: 1
			},
			}
		]  	
	});
	// Initialize reference slider

	// Initialize collaboration slider
	$('.collaboration_slider').slick({
		slidesToShow: 3,
		arrows: false,
		autoplay: true,
  		autoplaySpeed: 2000,
		variableWidth: true,
			responsive: [
				{
				breakpoint: 768,
				settings: {
					slidesToShow: 1
				},
				}
			]  	
	});
	// Initialize collaboration slider
});