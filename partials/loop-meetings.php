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
        $counter++;
		$content = $page->post_content;
		if ( ! $content ) // Check for empty page
			continue;

		$content = apply_filters( 'the_content', $content );
	?>
<?php
        if($counter<3) {?>
    <article id="post-<?php the_ID(); ?>" class="large-6 columns" role="article" itemscope itemtype="http://schema.org/WebPage">

            <h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>
		<div class="entry">
        <?php echo $content; ?>
        </div>
    </article>
<?php }
	 else {?>
        <li class="large-4 columns end"><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></li>
<?php } }
?>


<?php endwhile; endif; ?>
