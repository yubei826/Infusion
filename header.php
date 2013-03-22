<?php
/**
 * Header
 *
 * @package infusion
 * @subpackage Template
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php hybrid_document_title(); ?></title>

<meta name="viewport" content="width=device-width">
<link rel="shortcut icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="<?php bloginfo( 'stylesheet_directory' ); ?>/img/icons/apple-touch-icon.png">

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/js/modernizr.js"></script>


<?php wp_head(); // wp_head ?>

</head>

<body class="<?php hybrid_body_class(); ?>">

	<div id="container">

		<header id="header" role="banner">
			
			<hgroup id="branding">

				<h1 id="site-title"><a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>

				<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>

			</hgroup>
			
			<?php get_template_part( 'menu', 'primary' ); // Loads the menu-primary.php template. ?>

		</header>

		<div id="main" role="main">

			<?php if ( current_theme_supports( 'breadcrumb-trail' ) ) breadcrumb_trail( array( 'container' => 'nav', 'separator' => '>', 'before' => __( 'You are here:', 'infusion' ) ) ); ?>
