<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="row">

				    <div id="main" class="small-12 columns first" role="main">



					    <?php
					    	global $post;
					    	$author_id = $post->post_author;
					    ?>
                        <?php get_template_part( 'partials/content', 'author' ); ?>


					    	<!-- To see additional archive styles, visit the /partials directory -->


    				</div> <!-- end #main -->



                </div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
