<?php

if(is_page()){
  query_post([
    'posts_per_page'=>5,
    'orderby'=>'date',
    'order'=>'DESC',
    'post_type'=>'post'
  ])
}
