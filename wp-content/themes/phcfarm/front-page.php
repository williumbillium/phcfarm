<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

    <?php
        $args = array(
        'numberposts' => '3'
        );
        $the_post = get_posts($args);
    ?>

    <div class="row blog">
        <?php foreach ($the_post as $post) : setup_postdata($post); ?>
        <div class="col-xs-4">
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <a href="<?php the_permalink(); ?>"><?php 
                    if (has_post_thumbnail() == true) {
                        the_post_thumbnail('medium');
                    }
                ?></a>
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_date(); ?>
                <div class="entry-content">
                    <?php 
                        the_excerpt(); 
                    ?>
                </div>
            </article>
        </div>
        <?php endforeach; /* End loop */ ?>
    </div><!-- /.row-fluid -->


