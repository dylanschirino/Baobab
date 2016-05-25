<?php

/*
Template Name: Single Tutoriel
*/
if(is_page()){
  query_posts([
    'post_type' => 'tutoriel'
  ]);
}
get_header();
?>
<main>
  <div class="ariane ariane--static">
    <ul class="ariane__menu">
      <li class="ariane__element">
        Accueil/
      </li>
      <li class="ariane__element">
        Anime/
      </li>
      <li class="ariane__element">
        <?php echo the_title();?>
      </li>
    </ul>
  </div>


  <section class="animetoimeme">
    <h2 aria-level="2" class="animetoimeme__title">
      <?php echo the_title();?>
    </h2>
    <div class="timeline">
      <ul class="timeline__list">
        <li class="timeline__element">1</li>
        <li class="timeline__element">2</li>
        <li class="timeline__element">3</li>
        <li class="timeline__element">4</li>
      </ul>
    </div>
    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
      <article class="ministudio">
        <h3 aria-level="3" class="ministudio__title"><?php echo the_field('etape_1');?></h3>
        <?php $image_tutoriel = get_field('image_tutoriel_1');
        $tutorielsize='thumb-tutoriel';?>
        <div class="ministudio__image">
          <?php echo wp_get_attachment_image( $image_tutoriel['id'], $tutorielsize );?>
        </div>
        <p class="ministudio__explain">
          <?php the_field('explication_1');?>
        </p>
      </article>
      <article class="ministudio">
        <h3 aria-level="3" class="ministudio__title"><?php echo the_field('etape_2');?></h3>
        <?php $image_tutoriel = get_field('image_tutoriel_2');
        $tutorielsize='thumb-tutoriel';?>
        <div class="ministudio__image">
          <?php echo wp_get_attachment_image( $image_tutoriel['id'], $tutorielsize );?>
        </div>
        <p class="ministudio__explain">
          <?php the_field('explication_2');?>
        </p>
      </article>
      <article class="ministudio">
        <h3 aria-level="3" class="ministudio__title"><?php echo the_field('etape_3');?></h3>
        <?php $image_tutoriel = get_field('image_tutoriel_3');
        $tutorielsize='thumb-tutoriel';?>
        <div class="ministudio__image">
          <?php echo wp_get_attachment_image( $image_tutoriel['id'], $tutorielsize );?>
        </div>
        <p class="ministudio__explain">
          <?php the_field('explication_3');?>
        </p>
      </article>
      <article class="ministudio">
        <h3 aria-level="3" class="ministudio__title"><?php echo the_field('etape_4');?></h3>
        <?php $image_tutoriel = get_field('image_tutoriel_4');
        $tutorielsize='thumb-tutoriel';?>
        <div class="ministudio__image">
          <?php echo wp_get_attachment_image( $image_tutoriel['id'], $tutorielsize );?>
        </div>
        <p class="ministudio__explain">
          <?php the_field('explication_4');?>
        </p>
      </article>
    <?php endwhile; endif;?>
  </section>
</main>
<?php get_footer();?>
