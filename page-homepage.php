<?php
/*
Template Name: Homepage
*/
get_header(); ?>
	<div id="content" class="row">
	<div id="featured"> 
     <img src="/images/slides/slide1.jpg" alt="Slide 1" />
     <img src="/images/slides/slide2.jpg" alt="Slide 2" />
	</div>
	</div>
	<!-- Row for main content area -->
	<div id="content" class="row">
	<div class="four columns">
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>
	<div class="four columns">
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>
	<div class="four columns">
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>
	</div>
	<div id="hompage-post" class="row">
	
		<div id="main" class="twelve columns" role="main">
			<div class="post-box">
				<?php get_template_part('loop', 'page'); ?>
			</div>
		</div><!-- /#main -->
		
	</div><!-- End content row -->
	
<?php get_footer(); ?>