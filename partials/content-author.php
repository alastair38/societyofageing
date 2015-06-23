<?php
$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
$role = get_user_role($curauth->ID);
?>

<div class="author small-12 columns">


		<div class="authorInfo large-8 medium-8 small-12 columns">
            <div class="authorAvatar">

          <?php echo get_avatar( $curauth->user_email, '80' ); ?>
        </div>



            <h2 class="authorName"><?php echo $curauth->display_name; ?></h2>
            <?php
            if ($curauth->jobTitle) {
                echo '<span>' . $curauth->jobTitle . '</span>';
            }?>
              <?php
            if ($curauth->organisation) {
                echo '<span>' . $curauth->organisation . '</span>';
            }?>
            <?php if ($role === committee_member ){
            echo "<span id='member'>Committee Member</span>";
            } elseif ($role === president ) {
             echo "<span id='member'>President + Committee Member</span>";
            } elseif ($role === secretary) {
            echo "<span id='member'>Secretary + Committee Member</span>";
            } else {
            echo "<span id='member'>Standard Member</span>";
            }
?>

			<p class="authorDescription"><?php echo $curauth->description; ?></ p>
			<p class="socialIcons">


<ul id="singleAuthor">
	<?php
	$email = $curauth->user_email;
	if($email != '')
	{
		printf('<li><a href="mailto:' . $email . '" target="_blank"><i class="fi-mail"></i> Email</a></li>');
	}

	$twitter = $curauth->twitter;
	if($twitter != '')
	{
		printf('<li><a href="%s" target="_blank">%s</a></li>', $twitter, '<i class="fi-social-twitter"></i> Twitter');
	}

	$linkedin = $curauth->linkedin;
	if($linkedin != '')
	{
		printf('<li><a href="%s" target="_blank">%s</a></li>', $linkedin, '<i class="fi-social-linkedin"></i> LinkedIn');
	}
?>
</ul>
</p>

            </ p>

		</div>




<div class="large-4 medium-4 small-12 columns">
    <div class="allAuthors">



<?php

if ($role === committee_member || president || secretary ){?>

    <h3>Other Committee Members</h3>

    <?php
    $id = $curauth->ID;
    $args = array(
	'blog_id'      => $GLOBALS['blog_id'],
	'role'         => 'committee_member',
	'exclude'      => array($id),
	'orderby'      => 'display_name',
	'order'        => 'ASC',
	'count_total'  => false,
	'fields'       => 'all',
	'who'          => ''
 ); ?>

    <?php
    $blogusers = get_users( $args );
    foreach ( $blogusers as $user ) {?>

        <h4 class="authorName"><a href="<?php echo get_author_posts_url( $user->ID ); ?>"><?php echo $user->display_name; ?></a></h4>
<?php }

    ?>
    <?php
    $id = $curauth->ID;
    $args = array(
	'blog_id'      => $GLOBALS['blog_id'],
	'role'         => 'president',
	'exclude'      => array($id),
	'orderby'      => 'display_name',
	'order'        => 'ASC',
	'count_total'  => false,
	'fields'       => 'all',
	'who'          => ''
 ); ?>

    <?php
    $blogusers = get_users( $args );
    foreach ( $blogusers as $user ) {?>

        <h4 class="authorName"><a href="<?php echo get_author_posts_url( $user->ID ); ?>"><?php echo $user->display_name; ?></a></h4>
<?php }

    ?>
    <?php
    $id = $curauth->ID;
    $args = array(
	'blog_id'      => $GLOBALS['blog_id'],
	'role'         => 'secretary',
	'exclude'      => array($id),
	'orderby'      => 'display_name',
	'order'        => 'ASC',
	'count_total'  => false,
	'fields'       => 'all',
	'who'          => ''
 ); ?>

    <?php
    $blogusers = get_users( $args );
    foreach ( $blogusers as $user ) {?>

        <h4 class="authorName"><a href="<?php echo get_author_posts_url( $user->ID ); ?>"><?php echo $user->display_name; ?></a></h4>
<?php }

    ?>

    <?php } else {
    get_template_part( 'partials/content', 'latestnews' );
} ?>
    </div>
</div>
</div>
<hr>

<h2 class="authorPosts">Contributions by <?php echo $curauth->display_name; ?></h2>

<?php get_template_part( 'partials/loop', 'archive' ); ?>
