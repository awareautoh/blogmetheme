<?php
//from the wordpress core
function Blogme_Resources(){

  wp_enqueue_style('style', get_stylesheet_uri());


}

add_action('wp_enqueue_scripts', 'Blogme_Resources');
