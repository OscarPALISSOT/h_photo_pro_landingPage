<?php get_header(); ?>
    <div class="content">
        <img class="topPic" src="<?= get_template_directory_uri() . './assets/img/hadrien.jpg' ?>"/>
        <h1 class="title">@h_photo_pro</h1>
        <h1 class="subtitle">Découvre l'ensemble de mon contenu sur ces différents réseaux !</h1>
        <div class="links">
            <?php
            $args = array(
                'post_type' => 'links',
                'post_status' => 'publish'
            );
            $posts = new WP_Query($args);
            if ($posts->have_posts()) {
                while ($posts->have_posts()) {
                    $posts->the_post();
                    ?>
                    <a href="<?php the_field('hyperlink') ?>" target="_blank" rel="noopener noreferrer">
                        <?php the_title(); ?>
                    </a>
                    <?php

                }
            } else {
                ?> <h1>Pas de liens enregistrés.</h1> <?php
            }
            wp_reset_query();
            ?>
        </div>
    </div>
<?php get_footer(); ?>