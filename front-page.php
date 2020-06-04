<?php /**
 * Template Name: Front Page Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>


<div class="wrapper bg">
<main id="site-content" role="main">

    <?php

    if ( have_posts() ) :

        while ( have_posts() ):
            the_post(); ?>
<!--
        <h1 class="site-title"><a href="<?php //echo site_url('magazine') ?>">Heel <br>de stad <br>Heel de<br> Aarde</a></h1> -->
        <h1 class="site-title">Heel <br>de stad <br>Heel de<br> Aarde</h1>



    <?php endwhile; endif; ?>

</main><!-- #site-content -->

<?php get_footer(); ?>
