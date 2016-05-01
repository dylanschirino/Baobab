
<?php
/*
Template Name: Homepage
*/

get_header();
?>
<main class="ma-page">
      <section class="ma-page__content">
        <?php
        if ( have_posts() ):
          while ( have_posts() ):
            the_post();
            ?>
        <h2 class="ma-page__title"><?php the_title();?></h2>
        <div class="ma-page__text">
          <?php the_content();?>
        </div>
        <aside class="about">
          <h3 class="about__title"><?php the_field('about_title');?> </h3>
          <div class="about__content">
            <?php the_field('about_content');?>
          </div>
        </aside>
        <section class="last-article">
          <h3 class="last-article__title">Dernier article</h3>
<?php endwhile;
endif;?>
          <div class="last-article__container">
            <?php
            $args = array( 'posts_per_page' => 2 );
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <article class="article">
          <h4 class="article__title">
            <?php the_title();?>
          </h4>
          <p class="article__date">
            Publié le <?php the_time('l j F');?></p>
            <p class="article__excerpt">
              <?php the_custom_excerpt();?>
            </p>
            <p class="article__author">
              <?php the_author(); ?>
            </p>
            <a href="<?php the_permalink();?>" class="article__link">Lire la suite</a>
          </p>
        </article>
          <?php endforeach;
          wp_reset_postdata();?>
        </div>

      </section>
    </section>
  </main>
<?php
get_footer();
