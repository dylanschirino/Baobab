<?php

/*
      Template Name: Homepage
*/

get_header();
?>
      <main class="ma-page">
            <section class="ma-page__content">

<?php if ( have_posts() ):
      while ( have_posts() ):
            the_post(); ?>
                  <h2 class="ma-page__title"><?php the_title();?></h2>

                  <div class="ma-page__text">
                        <?php the_content();?>
                  </div>

                  <aside class="about">
                        <h3 class="about__title"><?php the_field('about_title');?></h3>

                        <div class="about__content">
                              <?php the_field('about_content');?>
                        </div>
                  </aside>

<?php endwhile;
endif;?>

                  <section class="last-articles">
                        <h3 class="last-articles__title"><?php
                        echo str_replace ('%s','<span class="sro">'.get_the_title().'</span>',__('Derniers articles %s','b'));
                        ?></h3>
                        <ul>
                          <li></li>
                          </ul>
                        <div class="last-articles__container">

<?php
$posts = new WP_Query(['posts_per_page' => 3]);

// HAS POSTS
if ( $posts->have_posts() ) :
      // THE LOOP
      while ( $posts->have_posts() ) :
            $posts->the_post(); ?>

      <article class="article">
            <h4 class="article__title"><?php the_title();?></h4>
            <p class="article__date">Publié le <time class="article__time" datetime="<?php the_date('c');?>"><?php the_date('l j F');?></time></p>
            <p class="article__excerpt"><?php the_custom_excerpt();?></p>
            <a href="<?php the_permalink();?>" class="article__link">Lire la suite</a>
      </article>

      <?php
      // END LOOP
      endwhile;?>
<?php endif; ?>

                        </div>
                  </section>
            </section>
            <section class="latest-project">
              <h2 class="latest-project__title">
                Mes dernieres réalisations
              </h2>
              <div class="latest-project__container">
                <?php
                $posts = new WP_Query(['posts_per_page' => 2,'post_type'=>'project']);

                // HAS POSTS
                if ( $posts->have_posts() ) :
                      // THE LOOP
                      while ( $posts->have_posts() ) :
                            $posts->the_post(); ?>

                      <article class="article">
                            <h4 class="article__title"><?php the_title();?></h4>
                            <p class="project__country">Pays: <?php the_field('country') ?>
                            </p>
                            <p class="project__country">Pays: <?php the_field('time') ?>
                            </p>
                            <p class="article__excerpt"><?php the_custom_excerpt();?></p>
                            <a href="<?php the_permalink();?>" class="article__link">Lire la suite</a>
                            <img src="<?php the_post_thumbnail_url()?>">
                      </article>

                      <?php
                      // END LOOP
                      endwhile;?>
                <?php endif; ?>
              </div>
            </section>
      </main>
<?php

get_footer();
