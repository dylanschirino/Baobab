<?php
/*
      Template Name: Single article
*/

get_header();
?>

<?php if ( have_posts() ):
      while ( have_posts() ):
            the_post(); ?>

            <section class="article">
              <h2 class="article__title">
                <?php the_title() ?>
              </h2>
              <p> <?php echo get_the_term_list( get_the_ID(),'project-type', 'Type(s) de projet: ',' - ','&nbsp;!');?>
              <div class="article__content">
                <?php the_content(); ?>
              </div>
              <p class="project__country">Pays: <?php the_field('country') ?>
              </p>
              <p class="project__country">Pays: <?php the_field('time') ?>
              </p>
              <p class="article__excerpt"><?php the_custom_excerpt();?></p>
              <img src="<?php the_post_thumbnail_url()?>">

<?php endwhile; endif;?>



<?php
get_footer();
