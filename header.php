<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">

		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- Icons & Favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png" rel="apple-touch-icon" />
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
		 <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>
	    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>
		<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">
				<div id="container">
					<header class="header" role="banner">

						 <!-- This navs will be applied to the topbar, above all content
							  To see additional nav styles, visit the /partials directory -->
						 <?php // get_template_part( 'partials/nav', 'top-offcanvas' ); ?>

						<div id="inner-header" class="row">
							<div class="large-12 medium-12 columns">
							</div>

							 <!-- This navs will be applied to the main, under the logo
								  To see additional nav styles, visit the /partials directory -->

							 <?php get_template_part( 'partials/nav', 'main-offcanvas' ); ?>

                             <!--

                            <button id="accessible">&#63;</button>

                            <div id="modal" aria-hidden="true" aria-labelledby="modalTitle" aria-describedby="modalDescription" role="dialog">
                                <div id="modalDescription" class="screen-reader-text">
                                Beginning of dialog window. Escape will cancel and close the window.
                                </div>
                                <h1 id="modalTitle">Accessibility Tips</h1>

                                <?php joints_main_nav(); ?>

                                <button id="modalCloseButton" class="modalCloseButton" title="Close Accessibility Tips"><span id="cancel">Close</span></button>

                            </div>
                            <div id="modalOverlay" tabindex="-1"></div>
                            -->

                            <button href="#" class="scrollToTop">Back To Top</button>

						</div> <!-- end #inner-header -->

					</header> <!-- end .header -->
