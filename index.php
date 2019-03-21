<?php
get_header();
if( have_posts()) {
    while(have_posts()){
        the_post();
        ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
        <?php
        the_content();
    }
}
get_sidebar();
get_footer();
?>