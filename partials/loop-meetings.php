<?php if (have_posts()) : while (have_posts()) : the_post();
?>


	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

		<header class="article-header">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</header> <!-- end article header -->

	    <section class="entry-content" itemprop="articleBody">

		    <?php wp_link_pages(); ?>
		</section> <!-- end article section -->

		<footer class="article-footer">

		</footer> <!-- end article footer -->



	</article> <!-- end article -->

<?php
	$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

	foreach( $mypages as $page ) {
		$content = $page->post_content;
        $trimContent = wp_trim_words( $content, $num_words = 50, $more = null );
		if ( ! $content ) // Check for empty page
			continue;

		$content = apply_filters( 'the_content', $content );
	?>
<?php
        $featured = get_field('featured', $page->ID);
        if( $featured) {?>
    <article id="post-<?php the_ID(); ?>" class="large-6 columns" role="article" itemscope itemtype="http://schema.org/WebPage">
<div class="meetingContent">
            <h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>

        <?php echo $trimContent; ?>
        <?php echo get_the_post_thumbnail($page->ID, 'full');?>
        </div>
    </article>
<?php }
	 else { } }
?>

<h2 id="previousMeetingsTitle" class="columns">Previous Meetings</h2>

<?php
	$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

	foreach( $mypages as $page ) {

	?>
<?php
        $featured = get_field('featured', $page->ID);
        if( !$featured) {?>
    <article id="post-<?php the_ID(); ?>" class="large-4 medium-6 small-12 columns" role="article" itemscope itemtype="http://schema.org/WebPage">

            <h4 class="previousMeetings"><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h4>

    </article>
<?php }
	 else { } }
?>


<?php endwhile; endif; ?>
