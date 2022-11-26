<?php get_header(); ?>
    <h1>hello world<h1>
<?php if (have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
        <?php the_title(); ?>
    <?php endwhile; ?>
<?php else: ?>
    <h1>Pas de liens enregistrés.</h1>
<?php endif; ?>
<?php get_footer(); ?>