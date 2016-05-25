<?php

/*
Template Name: Contact
*/

get_header();
;?>

<div class="ariane ariane--static">
  <ul class="ariane__menu">
    <li class="ariane__element">
      Accueil /
    </li>
    <li class="ariane__element">
      Contact
    </li>
  </ul>
</div>


<section class="contactinfo">
  <h2 aria-level="2" class="contactinfo__title"><?php _e('Contact','b');?></h2>
  <div class="contactinfo__information">
    <?php $easy_options = get_option("easy_page_options");?>
    <div class="contactinfo__container contactinfo__container--mail">
      <p class="contactinfo__label">
        <?php _e('Email :','b');?>
      </p>
      <a class="contactinfo__link contactinfo__link--mail" href="mailto:<?php echo $easy_options['mail'];?>" title="Envoyer un mail avec votre gestionnaire de mail par défaut"><?php echo $easy_options['mail'];?></a>
    </div>

    <div class="contactinfo__container contactinfo__container--whatsapp">
      <p class="contactinfo__label">
        <?php _e('Whatsapp :','b');?>
      </p>
      <a class="contactinfo__link contactinfo__link--whatsapp" href="tel:<?php echo $easy_options['whatsapp'];?>" title="Nous contacter sur whatsapp"><?php echo $easy_options['whatsapp'];?></a>
    </div>

    <div class="contactinfo__container contactinfo__container--phone">
      <p class="contactinfo__label">
        <?php _e('Téléphone :','b');?>
      </p>
      <a class="contactinfo__link contactinfo__link--phone" href="tel:<?php echo $easy_options['telephone'];?>" title="Nous contacter via téléphone"><?php echo $easy_options['telephone'];?></a>
    </div>

  </div>
  <div class="contactinfo__formulaire">
    <div class="contactinfo__formcontent">
      <?php echo do_shortcode( '[contact-form-7 id="77" title="Contact form 1"]' ); ?>
    </div>
  </div>
  <div class="contactinfo__image" id="deplacement">
    <?php $image_detourer = get_field('image_contact');
    $detouresize='thumb-decoration';?>
    <?php echo wp_get_attachment_image( $image_detourer['id'], $detouresize );?>
  </div>
</section>

<?php get_footer();?>
