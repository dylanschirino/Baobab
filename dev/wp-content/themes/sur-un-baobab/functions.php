<?php
/*
* Define post_types & taxonomies
*/
add_theme_support( 'post-thumbnails' );

add_image_size( 'thumb-doityourself', 345, 345, true );
add_image_size('thumb-mainimage', 1000, 667, true);
add_image_size( 'thumb-cards', 297, 240, true);
add_image_size( 'thumb-decoration', 585, 430, true);
add_image_size('thumb-actu', 464, 356, true);
add_image_size('thumb-actu-bckg', 1000, 500, true);
add_image_size('thumb-actu-image', 542, 361, true);
add_image_size('thumb-realisation', 376, 217, true);
add_image_size('thumb-makingof', 200, 200, true);
add_image_size('thumb-affiche', 400, 300, true);
add_image_size('thumb-diffusion', 135, 210, true);
add_image_size('thumb-anime', 381, 368, true);
add_image_size('thumb-tutoriel',300,225, true);
add_image_size('thumb-description',257,257, true);

register_post_type( 'project', [
  'label' => __('Court-métrages','b'),
  'labels' => [
    'singular_name' => __('Court-métrage','b'),
    'add_new' => __('Ajouter un nouveau projet','b')
  ],
  'description' => __('La liste de tous les projets (court-métrages, ateliers, ...) affichés sur le site.','b'),
  'public' => true,
  'menu_position' => 5,
  'menu_icon' => 'dashicons-editor-video',
  'supports' => ['title','editor','thumbnail'],
  'has_archive' => true
  ] );
  register_taxonomy( 'project-type', 'project', [
    'label' => __('Types de projets','b'),
    'labels' => [
      'singular_name' => __('Type de projet','b')
    ],
    'public' => true,
    'description' => __('Le procédé utilisé pour créer ce projet','b'),
    'hierarchical' => true
    ] );
    /*
    * Defines Option page
    */
    register_post_type( 'tutoriel', [
      'label' => __('Tutoriel','b'),
      'labels' => [
        'singular_name' => __('Tutoriel','b'),
        'add_new' => __('Ajouter un nouveau tutoriel','b')
      ],
      'description' => __('La liste de tous les tutoriels affichés sur le site.','b'),
      'public' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-welcome-learn-more',
      'supports' => ['title','editor','thumbnail'],
      'has_archive' => true
      ] );
    /*
    * Defines navigation menus.
    */
    register_nav_menu( 'main-nav', __('Menu principal, affiché dans le header.','b') );
    /*
    * Generates a custom excerpt, used on the homepage
    */
    function get_the_custom_excerpt($length = 150)
    {
      $excerpt = get_the_content();
      $excerpt = strip_shortcodes( $excerpt );
      $excerpt = strip_tags( $excerpt );
      // Pourrait être amélioré de façon significative.
      // Par exemple :
      // - ne pas couper en plein milieu d'un mot
      // - ajouter un point de suspension quand on a dû couper dans le texte
      // - etc.
      return substr($excerpt, 0, $length);
    }
    function the_custom_excerpt($length = 150)
    {
      echo get_the_custom_excerpt($length);
    }
    /*
    * Generates a link label containing the post_title (from the loop)
    */
    function get_the_link($string, $replace = '%s')
    {
      // Mode opératoire :
      // - On remplace la string "%s" (ou celle fournie par $replace) par le titre du post courant dans the_loop, entouré d'un span.
      // - Ne pas oublier d'ajouter une classe sur ce span (dans ce cas, une classe "sro" pour "Screen Readers Only"
      // - Via le CSS, on cible cette classe afin de lui attribuer les styles nécessaires pour la cacher.
      // Le but étant de créer un lien unique, tout en respectant un design demandant une répétition de liens qui, à priori, seraient identiques (par exemple : "Lire la suite", "Voir plus", ...).
      // Cette amélioration va impacter l'accessibilité de votre site, mais donc aussi son référencement.
      return str_replace($replace, '<span class="sro">' . get_the_title() . '</span>', __($string,'b'));
    }
    function the_link($string, $replace = '%s')
    {
      echo get_the_link($string, $replace);
    }
    /*
    * Generates a custom menu array
    */
    function b_get_menu_id( $location )
    {
      $a = get_nav_menu_locations();
      if (isset($a[$location])) return $a[$location];
      return false;
    }
    function b_get_menu_items( $location )
    {
      $navItems = [];
      foreach (wp_get_nav_menu_items( b_get_menu_id($location) ) as $obj) {
        // Si vous avoir un contrôle sur les liens affichés, c'est ici. (Par exemple: mettre $item->isCurrent à true|false)
        $item = new stdClass();
        $item->url = $obj->url;
        $item->label = $obj->title;
        $item->icon = $obj->classes[0];
        array_push($navItems, $item);
      }
      return $navItems;
    }
    /*
    *    Generates a languages menu
    *    Based on Polylang (plugin)
    */
    function b_get_languages()
    {
      $langItems = [];
      $rawItems = pll_the_languages( [
        'echo' => false,
        'hide_if_empty' => false,
        'hide_if_no_translation' => false,
        'raw' => true
        ] );
        foreach ($rawItems as $raw) {
          // Si vous souhaitez faire des manipulations sur le format des données, c'est ici. (Par exemple: changer les codes de langues de "es" à "ESP" pour des besoins en CSS)
          $item = new stdClass();
          $item->label = $raw['name'];
          $item->url = $raw['url'];
          $item->code = $raw['slug'];
          array_push($langItems, $item);
        }
        return $langItems;
      }

      function the_link_image(){

        $image = get_field('image');
        $width = $image['sizes'][ 350 . '-width' ];
        $height = $image['sizes'][ $size . '-height' ];
        echo $image['url'];
      }

      function the_breadcrumb(){
        if(!is_home()){
          echo 'Accueil '.'/ ';
          if(is_category()||is_single()){
            the_category('title');
          }
          else if(is_search()){
            echo 'Termes recherchés&nbsp;:'.get_search_query();
          }
          else if(is_page()){
            echo get_the_title();
          }
        }
      }

/*
***Commentaire changement
*/

      $comment_args = array( 'fields' => apply_filters( 'comment_form_default_fields', array(

          'author' =>
          '<label for="author" class="form__label">' . __( 'Pseudo' ) . '</label> '.
          '<input id="author" class="form__input" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />',

          'email'  =>
          '<label for="email" class="form__label">' . __( 'Mail' ) . '</label> ' .
          '<input id="email" class="form__input" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />',

          'url'    => '' ) ),

          'comment_field' =>'<label for="comment" class="form__label">' . __( 'Message' ) . '</label>' .
           '<textarea id="comment" class="form__textarea" name="comment" cols="45" rows="8" aria-required="true"></textarea>',

           'class_submit'=>'form__submit',
           'label_submit'=>'Commenter'

  );
