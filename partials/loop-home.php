<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

		<header class="article-header">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</header> <!-- end article header -->

	    <section class="entry-content" itemprop="articleBody">
            <?php the_post_thumbnail('full');?>
		    <?php the_content(); ?>
		    <?php wp_link_pages(); ?>
		</section> <!-- end article section -->

		<footer class="article-footer">

		</footer> <!-- end article footer -->
<ul id="homeLinks">
		    <?php
$page = get_page_by_title( 'Committee' );
$page2 = get_page_by_title( 'RC11 Scientific Programme' );
wp_list_pages('title_li=&include=' . $page->ID .',' . $page2->ID );
?>
</ul>

	</article> <!-- end article -->

<?php endwhile; endif; ?>
