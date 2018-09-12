<?php
/**
 * Template part for displaying map section.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nelumbo
 */

?>

<section class="map-section">
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=<?php echo carbon_get_theme_option( 'google_maps_api_key' ); ?>"></script>
	<div class="gmap">
		<div id="gmap_canvas"></div>
	</div><!-- .gmap -->
	<?php $map = $section['map_location']; ?>
	<script type="text/javascript">
		function init_map() {
			var myOptions = {
				scrollwheel: false,
				zoom: <?php echo $map['zoom'] ?>,
				center: new google.maps.LatLng(<?php echo $map['value']; ?>),
			};
			map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
			marker1 = new google.maps.Marker({
				map: map,
				position: new google.maps.LatLng(<?php echo $map['value']; ?>)
			});
		}
		google.maps.event.addDomListener(window, "load", init_map);
	</script>
</section><!-- .map-section -->
