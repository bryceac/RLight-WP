<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php wp_head(); ?> <!-- load wordpress header content -->
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
<?php // retrieve blog name, and, if present, include page or post name. ?>
<?php wp_title(' - ', true, 'right'); ?> <?php bloginfo('name'); ?>
</title>
<meta name="description" content="{{ article.description }}"> <!-- get article description -->
<meta name="keywords" content="{% for tag, articles in tags %}{% if loop.last %}{{ tag }}{% else %}{{ tag }}, {% endif %}{% endfor %}"> <!-- get article tags -->
</head>
<body>
<div id="wrapper"> <!-- create wrapper div -->
<div id="banner"> <!-- create banner div -->
<h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1> <!-- create link to main page -->
<p><?php bloginfo('description'); ?></p> <!-- display tagline -->
</div> <!-- close banner -->
<div id="header">&#160;</div> <!-- create header div -->
