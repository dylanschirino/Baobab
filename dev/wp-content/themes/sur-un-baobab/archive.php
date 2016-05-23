<?php
/*
Template Name: Actualité
*/

get_header();
;?>

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
        'posts_per_page' => 5,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post'
    ]);
}
?>


<section class="actualite">
  <div class="actualite__header">
    <?php if( get_field('img_actu') ):
        $img_actu = get_field('img_actu');
    ?>
  <img class="header__image" src="<?php echo $img_actu['url'];?>" width="464" height="356" alt="image decorative" id="apparition">
<?php endif;?>
  <h2 class="header__title" aria-level="2">
    <?php _e('Actualité','b');?>
  </h2>
</div>
  <?php if ( have_posts() ): while ( have_posts() ): the_post();?>
  <article class="actu actu--page">
    <a class="actu__link" href="<?php the_permalink();?>" title="Accéder à la fiche de l'actualité">
      <img class="actu__image" width="297" height="240" alt="image actualité" src="<?php the_post_thumbnail_url();?>">
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

<?php
get_footer();
;?>
