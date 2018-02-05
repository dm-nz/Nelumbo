<?php
/**
 * Register walkers
 *
 * @package nelumbo
 */

// Foundation top bar walker
class Foundation_Top_Bar extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"dropdown menu\" data-toggle>\n";
	}
}

// Foundation off-canvas walker
class Foundation_Off_Canvas extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"menu\" data-toggle>\n";
	}
}
