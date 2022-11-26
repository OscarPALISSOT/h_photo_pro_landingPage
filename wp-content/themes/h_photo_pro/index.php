<?php get_header(); ?>
    <h1>hello world<h1>
    <?php
    $args = array(
        'post_type' => 'links',
        'post_status' => 'publish'
    );
    $posts = new WP_Query( $args );
    if ( $posts->have_posts() ) {
        while ( $posts->have_posts() ) {
            $posts->the_post();
            the_title();
        }
    }else{
        ?> <h1>Pas de liens enregistrés.</h1> <?php
    }
    wp_reset_query();
    ?>
<?php get_footer(); ?>