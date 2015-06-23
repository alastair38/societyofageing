<?php
/*
Template Name: Reports Page
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="row">

				    <div id="main" class="large-12 columns first" role="main">



					   <?php
                        $newsitems = get_posts(array(
                            'post_type' => 'report',
                            'posts_per_page' => 2
                        ));
                        ?>

                        <?php if( $newsitems ): ?>
                        <h1  id="taxHeader">President + Secretary Reports</h1>
                        <div class="large-8 medium-8 small-12 columns">
                        <?php foreach( $newsitems as $newsitem ): ?>
                        <article class="">
                            <?php $title = get_the_title( $newsitem->ID );?>
                            <h2><a href="<?php echo get_the_permalink( $newsitem->ID ); ?>">
                            <?php echo $title; ?></a></h2>
                            <?php echo get_the_post_thumbnail($newsitem->ID, 'full');?>

                            <?php echo $newsitem->post_content;?>
                       </article>
                        <hr>

<?php endforeach; ?>
<?php endif; ?>
                        </div>


				<div class="large-4 medium-4 small-12 columns">
    <?php get_sidebar(); ?>
</div>


				    </div> <!-- end #main -->



				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
