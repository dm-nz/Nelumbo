$(document).foundation();

$(document).ready(function(){

	if ($(window).width() <= 640) {
		$('.top-stripe .cart').click(function(e){
			e.preventDefault();
			$('.top-stripe .cart .widget_shopping_cart').toggle();
		})
	}

	$('.search-toggle').click(function() {
		$('.product-search').toggle();
		$('.product-search input.search-field').focus();
	})

	$('.product-search .close a').click(function() {
		$('.product-search').hide();
	})

	if ($('.top-bar-right li').length) {
		$('.top-bar-right').css('margin-top','0');
	}

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