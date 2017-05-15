$(document).foundation();

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
