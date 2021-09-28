<?php
/**
 * Page template
 *
 * @package NetWarriorServices
 */

get_header();

?>

<div id="main-container" data-title="<?php echo get_the_title(); ?>">
    <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/content', 'page' );
        endwhile;
    ?>
</div>

<?php get_footer(); ?>
