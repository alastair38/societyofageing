
                            <?php
                        $newsitems = get_posts(array(
                            'post_type' => 'report',
                            'posts_per_page' => 4
                        ));
                        ?>

                        <?php if( $newsitems ): ?>
                        <h4 id="latestNewsTitle">Latest News</h4>
                        <?php foreach( $newsitems as $newsitem ): ?>

                        <div class="latestNews">
                            <?php $title = get_the_title( $newsitem->ID );
                            $trimmedTitle = wp_trim_words( $title, $num_words = 5, $more = '...' );?>
                            <a href="<?php echo get_the_permalink( $newsitem->ID ); ?>">
                            <?php echo get_the_post_thumbnail($newsitem->ID, array( 50, 50));?>
                            <h6><?php echo $trimmedTitle; ?></h6></a>
                       </div>

<?php endforeach; ?>
<?php endif; ?>

