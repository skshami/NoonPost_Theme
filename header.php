<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NoonPost
 */

?>

    
<!doctype html>
<html <?php language_attributes(); ?>>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Meta -->
    <meta charset="<?php bloginfo( 'charset' ); ?>"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- favicon -->
    
	<?php wp_head();?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!--loading -->
    <div class="loading">
        <div class="circle"></div>
    </div>
    <!--/-->
<header>
  <?php get_template_part('template-parts/nav');?>

</header> 