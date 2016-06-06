<?php
/*
Template Name: Actualité
*/

get_header();
;?>
<main>
  <div class="ariane ariane--static">
    <ul class="ariane__menu">
      <li class="ariane__element">
        <?php echo the_breadcrumb();?>
      </li>
    </ul>
  </div>

  <?php
  if(is_page()){
    query_posts([
      'posts_per_page' => 2,
      'orderby' => 'date',
      'order' => 'DESC',
      'post_type' => 'post',
      'paged' => get_query_var('paged')
    ]);
  }
  ?>

  <aside class="aside">
    <h3 class="aside__title" aria-level="3"><?php _e('Filtrer par','b');?></h3>
    <form method="post">
      <ul class="aside__list">
        <?php $post=get_post();
        $categorie=get_the_category($post->ID);?>
        <li class="aside__element">
          <input class="aside__element--checkbox" type="checkbox" name="croissant" id="croissant" value="<?php echo $categorie[0]->cat_name;?>">
          <label for="croissant" class="aside__element--label">
            <?php echo $categorie[0]->cat_name;?>
          </label>
        </li>
        <li class="aside__element">
          <input class="aside__element--checkbox" type="checkbox" name="decroissant" id="decroissant">
          <label for="decroissant" class="aside__element--label"><?php echo $categorie[0]->cat_name;?>
          </label>
        </li>
        <li class="aside__element">
          <input class="aside__element--checkbox" type="checkbox" name="categorie" id="categorie">
          <label for="categorie" class="aside__element--label">Catégorie
          </label>
        </li>
      </ul>
    </form>
  </aside>
  <section class="actualite">
    <div class="actualite__header">
      <?php if( get_field('img_actu') ):
        $img_actu = get_field('img_actu');
        $actusize='thumb-actu';
        ?>
        <div class="header__image" id="apparition">
          <?php echo wp_get_attachment_image($img_actu['id'],$actusize);?>
        </div>
      <?php endif;?>
      <h2 class="header__title" aria-level="2">
        <?php _e('Actualité','b');?>
      </h2>
    </div>
    <?php if ( have_posts() ): while ( have_posts() ): the_post();?>
      <article class="actu actu--page">
        <a class="actu__link" href="<?php the_permalink();?>" title="Accéder à la fiche de l'actualité">
          <div class="actu__image">
            <?php the_post_thumbnail('thumb-cards');?>
          </div>
        </a>
        <div class="actu__info">
          <h3 class="actu__title" aria-level="3">
            <?php echo the_title();?></h3>
            <ul class="actu__list">
              <li class="actu__element"><?php echo the_field('time');?></li>
              <?php $post=get_post();
              $categorie=get_the_category($post->ID);?>
              <li class="actu__element actu__element--green"><?php echo ($categorie[0]->cat_name);?> /</li>
              <li class="actu__element">auteur&nbsp;:&nbsp;<?php echo the_field('auteur');?></li>
            </ul>
            <p class="actu__text">
              <?php echo the_field('resume');?>
            </p>
            <a class="actu__button" href="<?php the_permalink();?>" title="Accéder à a fiche">
              Lire la suite
            </a>
          </div>
        </article>
      <?php endwhile; endif;?>
    </section>

    <div class="page">
      <?php wp_pagenavi();?>
    </div>
  </main>
  <?php
  get_footer();
  ;?>
