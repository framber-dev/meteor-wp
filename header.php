<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<!-- Meteor v1.0.0 | github.com/framber-dev/meteor-wp | License MIT -->

<head>
	<!--  Title --> 
	<title><?php title(); ?></title>
	<meta name="twitter:title" content="<?php title(); ?>" />
	<meta property="og:title" content="<?php title(); ?>"/>

	<!-- Description  -->
	<meta name="description" content="<?php description(); ?>" />
	<meta name="twitter:description" content="<?php description(); ?>" />
	<meta property="og:description" content="<?php description(); ?>" />

	<!-- Responsive desing --> 
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Twitter -->
	<meta name="twitter:card" content="summary_large_image" />
	<?php if ( is_single() ) : ?>
	<meta name="twitter:label1" content="Escrito por" />
	<meta name="twitter:data1" content="<?php echo the_author(); ?>" />
	<?php endif; ?>

	<!-- FB Open graph -->
	<meta property="og:type" content="<?php webtype(); ?>" />
	<meta property="og:url" content="<?php url_single(); ?>" />
	<meta property="og:site_name" content="<?php title(); ?>" />

	<?php if ( is_single() ) : ?>
	<!-- Og: Image -->
	<meta property="og:image" content="<?php echo firstImage(); ?>" />
	<meta property='og:image:width' content="1200"/>
	<meta property='og:image:height' content="630"/>

	<!-- Date -->
	<meta property="article:published_time" content="<?php echo get_the_date(); ?>" />
	<meta property="article:modified_time" content="<?php echo get_the_modified_date(); ?>" />
	<?php endif; ?>
	
	<!-- Canonical --> 
	<link rel="canonical" href="<?php url_single(); ?>" />
	
	<!-- Compatible -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- UTF-8 -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />	

	<!-- Meta Robots --> 
	<meta content='index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1' name='robots'/>

	<!-- Estilos -->
	<?php wp_head(); ?>

</head>
<body itemscope="itemscope" itemtype="https://schema.org/WebPage">
