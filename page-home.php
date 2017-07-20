<?php
/*
  Template Name: Homepage
*/
?>


    <?php get_header(); ?>


    <?php if(have_posts()): while(have_posts()): the_post(); ?>

    <div class="container bg-white">
        <div class="round-wrapper">
            <?php get_template_part( 'template-parts/section', 'navbar' ); ?>
            <?php get_template_part( 'template-parts/section', 'form' ); ?>
        </div>
    </div>
    <div class="container">
        <?php get_template_part( 'template-parts/section', 'content1' ); ?>
        <?php get_template_part( 'template-parts/section', 'content2' ); ?>
    </div>

    <?php endwhile; ?>

    <?php endif; ?>



    <!-- BANNER SECTION -->

    <?php get_footer(); ?>
