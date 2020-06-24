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

        <h1 class="site-title">Heel <br>de stad <br>Heel de<br> Aarde</h1>
        <div class="fb-page"
            data-href="https://www.facebook.com/heeldeaardegids/"
            data-tabs="timeline"
            data-width="400"
            data-height="500"
            data-small-header="false"
            data-adapt-container-width="false"
            data-hide-cover="false"
            data-show-facepile="true"><blockquote cite="https://www.facebook.com/heeldeaardegids/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/heeldeaardegids/">Heel de aarde</a></blockquote></div>


    <?php endwhile; endif; ?>

</main><!-- #site-content -->
<?php get_footer(); ?>
