<?php get_header(); ?>

<h1>投稿</h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h2><?php the_title(); ?></h2>
    <p><?php the_date(); ?></p>
    <p><?php the_content();  ?></p>

    <a href="<?php echo get_home_url(); ?>">トップページへ</a>

<?php endwhile; endif; ?>


<?php get_footer(); ?>
