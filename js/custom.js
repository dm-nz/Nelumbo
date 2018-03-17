$(document).foundation();

$(document).ready(function(){

	// Toggle header shopping cart with click on small screens
	if ($(window).width() <= 640) {
		$('.top-stripe .cart').click(function(e){
			e.preventDefault();
			$('.top-stripe .cart .widget_shopping_cart').toggle();
		})
	}

	// Toggle product search
	$('.search-toggle').click(function() {
		$('.product-search').toggle();
		$('.product-search input.search-field').focus();
	})

	// Close product search on close button
	$('.product-search .close a').click(function() {
		$('.product-search').hide();
	})

	// Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('#up').fadeIn();
		} else {
			$('#up').fadeOut();
		}
	});

	// Click event to scroll to top
	$('#up').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});

});
