<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <article>
    <a href="<?php the_permalink() ?>">
      <h2><?php the_title(); ?></h2>
      <p><span><?php echo get_the_date('', $post->ID); ?></span><?php the_content() ?></h2>
    </a>
  </article>

<?php endwhile; endif; ?>


<?php get_footer(); ?>
