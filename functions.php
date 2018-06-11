<?php

add_filter( 'widget_text', 'shortcode_unautop' );
add_filter( 'widget_text', 'do_shortcode' );

function moment_func() {

  wp_enqueue_script( 'momentjs', get_stylesheet_directory_uri() . '/js/moment.js');

}
add_action('wp_enqueue_scripts','moment_func');

function countdown_handler( $atts ) {

	$atts = shortcode_atts( array('date' => ''), $atts ); // pull date parameter from shortcode

	?>
	<script>
		window.onload = function countdown() {
		var countdown_text = moment("<?php echo $atts['date']; ?>").fromNow();
	    document.getElementById("myCountdown").innerHTML = countdown_text;
		}
	</script>
	<?php

	$countdown_snippet = '<span id="myCountdown"></span>';

	return $countdown_snippet;

}
add_shortcode( 'countdown', 'countdown_handler' );