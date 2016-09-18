<?php 
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'video', get_template_directory_uri() . '/js/jquery.vide.min.js', array(), '1.0.0', false );
	wp_enqueue_style( 'amethyst-dashicons-style', get_stylesheet_directory_uri(), array('dashicons'), '1.0' );
	wp_head(); 
	get_header();
?>

<div id="main">
<div id="content">
	<div class="whatwedo">
		<div class="section_header"><h1>What we do</h1></div>
		<div class="card_container">
			<div class="card"><img src="<?php echo get_template_directory_uri(); ?>/images/responsive_web_design.png" height="100%"/><span>Responsive Websites</span></div>
			<div class="card"><img src="<?php echo get_template_directory_uri();?>/images/application_development.png" height="100%"/><span>Application Development</span></div>
			<div class="card"><img src="<?php echo get_template_directory_uri();?>/images/nonprofit.png" height="80%"/><span>Nonprofit Solutions</span></div>
		</div>
	</div>
	<div class="featured">
		<div class="section_header"><h1>Our Work</h1></div>
		<div class="card_container">
		</div>
	</div>
	<div class="social">
		<div class="section_header"><h1>Social Networks</h1></div>
		<div class="card_container">
		<div class="card"><a href="https://www.facebook.com/stlwd"><span class="dashicons dashicons-facebook dicons">&nbsp;</span></a></div>
		<div class="card"><a href="https://twitter.com/stlwd"><span class="dashicons dashicons-twitter dicons">&nbsp;</span></a></div>
		<div class="card"><span class="dashicons dashicons-googleplus dicons">&nbsp;</span></div>
		</div>
	</div>
	<div class="blog"></div>

</div>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>
