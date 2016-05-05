<?php get_header();?>

<?php if ( have_posts() ):
      while ( have_posts() ):
            the_post(); ?>

      <article class="item">
        <h3> <?php the_title();?></h3>
        <div class="excerpt">
          <?php the_custom_excerpt();?>
        </div>
        <p><?php the_author(); ?>
      <a href="<?php the_permalink();?>">Lire la suite</a>
      </article>

<?php endwhile; endif;?>


<?php get_footer();?>
