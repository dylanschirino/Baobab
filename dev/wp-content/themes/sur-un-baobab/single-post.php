<?php

/*
  Template Name: Single Article
*/

get_header();

?>
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
      <?php if( get_field('background_image') ):
          $background_image = get_field('background_image');
      ?>
    <img class="fiche__image" src="<?php echo $background_image['url'];?>" width="1200" height="400" alt="image actualité">
  <?php endif;?>
    <h2 class="fiche__title" aria-level="2"><?php echo the_title();?></h2>
    <ul class="header__list">
      <li class="header__element header__element--date"><?php echo the_field('time');?></li>
      <li class="header__element header__element--file">
        <?php $post=get_post();
        $categorie=get_the_category($post->ID);?>
        <?php echo ($categorie[0]->cat_name);?></li>
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
        ?>
        <img class="actuality__image actuality__image--right" src="<?php echo $image_1['url'];?>" width="542" height="361" alt="image actualité">
      <?php endif;?>
    </article>

    <article class="actuality">
      <h3  class="actuality__title" aria-level="3"><?php echo the_field('titre_bloc_2');?></h3>
      <p class="actuality__text actuality__text--right">
        <?php echo the_field('texte_bloc_2');?>
        </p>
        <?php if( get_field('image_bloc_2') ):
            $image_2 = get_field('image_bloc_2');
        ?>
        <img class="actuality__image" src="<?php echo $image_2['url'];?>" width="542" height="361" alt="image actualité">
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
        <img class="actuality__image actuality__image--right" src="<?php echo $image_3['url'];?>" width="542" height="361" alt="image actualité">
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
<?php

get_footer();
