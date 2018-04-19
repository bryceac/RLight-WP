<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php wp_head(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
<?php wp_title(); ?>
</title>
<meta name="description" content="{{ article.description }}">
<meta name="keywords" content="{% for tag, articles in tags %}{% if loop.last %}{{ tag }}{% else %}{{ tag }}, {% endif %}{% endfor %}">
<?php wp_head(); ?>
</head>
<body>
<div id="wrapper"> <!-- create wrapper div -->
<div id="banner"> <!-- create banner div -->
<h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
<p><?php bloginfo('description'); ?></p>
</div>
<div id="header">&#160;</div> <!-- create header div -->
