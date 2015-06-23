<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
		<header class="article-header">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</header> <!-- end article header -->
        <section class="entry-content" itemprop="articleBody">
		    <?php the_content(); ?>
		    <?php wp_link_pages(); ?>
		</section> <!-- end article section -->
</article>

<?php endwhile; endif; ?>
<?php
$allUsers = get_users('orderby=meta_value&order=DESC&meta_key=last_name');

$users = array();

// Remove subscribers from the list as they won't write any articles
foreach($allUsers as $currentUser)
{
	if(in_array( 'president', $currentUser->roles ) || in_array( 'secretary', $currentUser->roles ) || in_array( 'committee_member', $currentUser->roles ) )
	{
		$users[] = $currentUser;
	}
}
?>

<?php
foreach($users as $user)
{
	?>
	<div class="author large-4 medium-6 small-12 columns end">

		<div class="authorInfo">

            <h2 class="authorName"><a href="<?php echo get_author_posts_url( $user->ID ); ?>"><?php echo $user->display_name; ?></a></h2>
            <div class="authorAvatar">
          <?php echo get_avatar( $user->user_email, '80' ); ?>
        </div>

            <?php
                $jobTitle = get_user_meta($user->ID, 'jobTitle', true);
	if($jobTitle != '')
	{
		echo '<span>' . $jobTitle . '</span>';
	}
    ?>


             <?php
                $organisation = get_user_meta($user->ID, 'organisation', true);
	if($organisation != '')
	{
		echo '<span>' . $organisation . '</span>';
	}
    ?>

			<p class="socialIcons">

<ul>
	<?php
	$email = get_the_author_meta( 'user_email', $user->id );
	if($user->user_email != '')
	{
		printf('<li><a href="mailto:' . $email . '" target="_blank"><i class="fi-mail"></i> Email</a></li>');
	}

	$twitter = get_user_meta($user->ID, 'twitter', true);
	if($twitter != '')
	{
		printf('<li><a href="%s" target="_blank">%s</a></li>', $twitter, '<i class="fi-social-twitter"></i> Twitter');
	}

	$linkedin = get_user_meta($user->ID, 'linkedin', true);
	if($linkedin != '')
	{
		printf('<li><a href="%s" target="_blank">%s</a></li>', $linkedin, '<i class="fi-social-linkedin"></i> LinkedIn');
	}
?>
</ul>
</p>

            </ p>
		</div>
	</div>
<?php
}
?>



