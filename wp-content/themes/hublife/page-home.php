<?php
// Template Name: Home
?>

<?php get_header();?>
    <?php if(have_posts()): while(have_posts()) : the_post();?>

    

    <?endwhile; endif;?>
<?php get_footer();?>

