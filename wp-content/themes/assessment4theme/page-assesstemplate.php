<?php get_header(); 
/**
 * Template Name: assessment post
 */

?>

<?php 
    if(have_posts()):
        while(have_posts()): the_post();
?>
    <p><?php the_content(); ?></p>
    <p><?php the_time(); ?></p>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>