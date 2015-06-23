<p class="byline">
    <?php $postType = get_post_type( $post );
    $link = get_post_type_archive_link( $postType );
    if ($postType === report) {
        echo '<a href="' . $link . '"><h6>President + Secretary Reports</h6></a>';
    }
    ?>
    <em>
	Contributed on <?php the_time('F j, Y') ?> by <?php the_author_posts_link(); ?>. <?php the_category(', ') ?>
    <?php echo get_the_term_list( $post->ID, 'contribution_type', 'Posted in ', ', ' ); ?>

    </em>
</p>
