<?php get_header(); ?>
<!-- Checks if there are posts and adds ACF fields -->
<?php 
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
            <h1><?php single_post_title();?><br></h1>
            <img src="<?php the_field('event_image'); ?>" />
            <h2>Location: <?php the_field('event_location'); ?><br></h2>
            <h3>Event Date: <?php the_field('event_date'); ?><br></h3>
            <p>Event Price: <?php the_field('event_price'); ?>Є<br><br><br></p>
        
 <?php  endwhile;
endif;
?>

<?php get_footer(); ?>
