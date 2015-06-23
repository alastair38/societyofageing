<?php
/*
Template Name: Full Width (No Sidebar)
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="">

				    <div id="main" class="large-8 medium-12 columns" role="main">

						<?php get_template_part( 'partials/loop', 'home' ); ?>


                    </div>

                        <div id="main" class="large-4 medium-12 columns" role="main">

						<aside>

                        <?php get_template_part( 'partials/content', 'latestnews' ); ?>

                        </aside>

    				</div> <!-- end #main -->

    </div> <!-- end #main -->



				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
