<?php /* Template Name: Custom page template */ ?>
<?php get_header(); ?>

<?php
while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'template-parts/page/content', 'title' ); ?>
    <?php get_template_part( 'template-parts/page/content', 'content' ); ?>
    <?php get_template_part( 'src/template-parts/page/content', 'sample' ); ?>
<?php
endwhile;
get_template_part( 'template-parts/page/content', 'widget' );
?>

<?php get_footer();
