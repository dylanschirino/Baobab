<?php

/*
* Define post types
*
*/
   add_theme_support('post-thumbnails');

   register_post_type( 'project', [
      'label'=> 'Court-métrages',
      'labels'=> [
         'singular_name'=> 'Court-métrage',
         'add_new'=> 'Ajouter un nouveau projet'
      ],
      'description'=> 'La liste de tout les projets (court-métrages, ateliers) affiché sur le site',
      'public'=> true,
      'menu_position'=> 5,
      'menu_icon'=> 'dashicons-editor-video',
      'supports'=> ['title','editor','thumbnail'],
      'has_archive'=>true
  ] );

  register_taxonomy('project-type','project',[
        'label'=>'Type de projet',
        'labels'=>[
          'singular_name'=>'Type de projet'
        ],
        'public'=>true,
        'description'=>'Le procédé utilisé pour créer ce projet',
        'hierarchical'=>true
  ]);

/*
* Generate an excerpt based on custom rules, used on the homepage
*
*/
function get_the_link($string,$replace='%s'){
return str_replace ($replace,'<span class="sro">'.get_the_title().'</span>',__($string,'b'));
}
function the_link($string,$replace='%s'){
      echo get_the_link($string,$replace);
}

function the_custom_excerpt(){
      echo get_the_custom_excerpt();
}

function get_the_custom_excerpt(){
      $excerpt = get_the_content();
      $excerpt = strip_shortcodes($excerpt);
      $excerpt = strip_tags($excerpt);
      $excerpt = substr($excerpt, 0, 150);
      return $excerpt;
}
