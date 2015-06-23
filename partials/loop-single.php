<article id="post-<?php the_ID(); ?>" class="large-8 medium-8 small-12 columns" role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="article-header">
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php get_template_part( 'partials/content', 'byline' ); ?>
    </header> <!-- end article header -->

    <section class="entry-content" itemprop="articleBody">
		<?php the_post_thumbnail('full'); ?>
		<?php the_content(); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">
		<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>	</footer> <!-- end article footer -->

	<?php comments_template(); ?>

</article> <!-- end article -->

<div class="large-4 medium-4 small-12 columns">
    <?php get_sidebar(); ?>
</div>

