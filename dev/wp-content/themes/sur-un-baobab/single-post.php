<?php

/*
Template Name: Single Article
*/

get_header();
?>
<main>
  <div class="ariane ariane--absolute">
    <ul class="ariane__menu">
      <li class="ariane__element">
        Accueil /
      </li>
      <li class="ariane__element">
        Actualité /
      </li>
      <li class="ariane__element">
        Article
      </li>
    </ul>
  </div>
  <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

    <section class="fiche">
      <div class="fiche__header">
        <div class="fiche__image">
          <?php if( get_field('background_image') ):
            $background_image = get_field('background_image');
            $bckgsize='thumb-actu-bckg';
            ?>
            <?php echo wp_get_attachment_image($background_image['id'],$bckgsize);?>
          </div>
        <?php endif;?>
        <h2 class="fiche__title" aria-level="2"><?php echo the_title();?></h2>
        <ul class="header__list">
          <li class="header__element header__element--date"><?php echo the_field('time');?></li>
          <li class="header__element header__element--file">
            <?php the_tags('Tags :  ') ?></li>
            <li class="header__element header__element--author">auteur&nbsp;:&nbsp;<?php echo the_field('auteur');?></li>
          </ul>
        </div>
        <article class="actuality">
          <h3  class="actuality__title" aria-level="3"><?php echo the_field('titre_bloc_1');?></h3>
          <p class="actuality__text">
            <?php echo the_field('text_bloc_1');?>
          </p>
          <?php if( get_field('image_bloc_1') ):
            $image_1 = get_field('image_bloc_1');
            $actu_imagesize='thumb-actu-image';
            ?>
            <div class="actuality__image actuality__image--right">
              <?php echo wp_get_attachment_image($image_1['id'],$actu_imagesize);?>
            </div>
          <?php endif;?>
        </article>

        <article class="actuality">
          <h3 class="actuality__title actuality__title--right" aria-level="3"><?php echo the_field('titre_bloc_2');?></h3>
          <p class="actuality__text actuality__text--right">
            <?php echo the_field('texte_bloc_2');?>
          </p>
          <?php if( get_field('image_bloc_2') ):
            $image_2 = get_field('image_bloc_2');
            ?>
            <div class="actuality__image">
              <?php echo wp_get_attachment_image($image_2['id'],$actu_imagesize);?>
            </div>
          <?php endif;?>
        </article>

        <article class="actuality">
          <h3  class="actuality__title" aria-level="3"><?php echo the_field('titre_bloc_3');?></h3>
          <p class="actuality__text">
            <?php echo the_field('texte_bloc_3');?>
          </p>
          <?php if( get_field('image_bloc_3') ):
            $image_3 = get_field('image_bloc_3');
            ?>
            <div class="actuality__image actuality__image--right">
              <?php echo wp_get_attachment_image($image_3['id'],$actu_imagesize);?>
            </div>
          <?php endif;?>
        </article>
      </section>
    <?php endwhile; endif; ?>
    <section class="commentaire">
      <h3 aria-level="3" class="commentaire__title">Commentaire</h3>
      <?php $comment=get_comments( $args );
      //var_dump($comment);?>
      <div class="commentaire__container">
        <?php foreach($comment as $key):?>
          <div class="container__article">
            <ul class="article__heading">
              <li class="article__element">
                <?php echo($key->comment_author);?>
              </li>
              <li class="article__element">
                <?php echo($key->comment_date);?>
              </li>
            </ul>
            <p class="article__text">
              <?php echo $key->comment_content;?>
            </p>
          </div>
        <?php endforeach;?>
      </div>
      <?php comment_form($comment_args); ?>
    </section>
  </main>
  <?php
  get_footer();
