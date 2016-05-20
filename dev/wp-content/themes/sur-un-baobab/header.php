<!DOCTYPE html>
<html lang="fr">
<head>
  <!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
  <meta charset="utf-8">
  <meta name="description" content="Sur un baobab workshop animation">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title><?php bloginfo();?> - <?php the_title();?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/css/styles.css';?>">
</head>
<body <?php body_class();?>>
  <header>
    <h1 aria-level="1"><?php bloginfo();?> - <?php the_title();?></h1>
    <nav class="subheader">
      <h2 aria-level="2" class="subheader__title"><?php _e('Menu Secondaire','b');?></h2>
      <ul class="subheader__menu">
        <li class="subheader__element">
          FR /
        </li>
        <li class="subheader__element">
          EN /
        </li>
        <li class="subheader__element">
          ES
        </li>
        <li class="subheader__element subheader__element--right">
          <form method="get" action="#" class="subheader__form">
            <label for="search" class="subheader__label">Rechercher</label>
            <input type="search" id="search" placeholder="Rechercher" class="subheader__search" name="search">
            <input type="submit" value="OK" class="subheader__submit">
          </form>
        </li>
        <li class="subheader__element subheader__element--right">
          <a href="https://www.facebook.com/surunbaobab" class="subheader__link subheader__link--facebook" title="Accéder à la page facebook">
            <span class="visuallyhidden">Facebook</span></a>
          </li>
          <li class="subheader__element subheader__element--right">
            <a href="https://www.youtube.com/channel/UCipelOUyTh7WbpxdWcB30vg" class="subheader__link subheader__link--youtube" title="Accéder à la page youtube">
              <span class="visuallyhidden"><?php _e('Youtube','b');?></span>
            </a>
          </li>
          <li class="subheader__element subheader__element--right">
            <a href="#" class="subheader__link"><?php _e('Presse','b');?> /</a>
          </li>
          <li class="subheader__element subheader__element--right">
            <a href="<?php echo the_permalink('81');?>" class="subheader__link"><?php echo get_the_title('81');?> /</a>
          </li>
          <li class="subheader__element subheader__element--right">
            <a href="<?php echo the_permalink('78');?>" class="subheader__link"><?php echo get_the_title('78');?> /</a>
          </li>
        </ul>
      </nav>
      <nav class="mainmenu">
        <a href="<?php echo home_url();?>" title="Retour à la page d'acceuil" class="mainmenu__logo"><span class="visuallyhidden"><?php _e('Logo sur un baobab','b');?></span></a>
        <h2 class="mainmenu__title" aria-level="2"><?php _e('Menu Principale','b');?></h2>
        <input type="checkbox" id="burger-shower" class="mainmenu__shower">
   <label for="burger-shower" class="hamburger">
     <span class="visuallyhidden"><?php _e('Menu','b');?></span>
   </label>

   <ul class="mainmenu__list">
   <?php foreach (b_get_menu_items('main-nav') as $navItem): ?>
                  <li class="mainmenu__element">
                  <a href="<?php echo $navItem->url;?>" title="<?php echo 'Vers la page '.$navItem->label;?>" class="mainmenu__link mainmenu__link--<?php echo $navItem->icon;?>"><?php echo $navItem->label;?></a>
                </li>
            <?php endforeach; ?>
        </ul>
      </nav>
    </header>
