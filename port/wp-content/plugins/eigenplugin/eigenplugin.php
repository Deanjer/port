<!-- Define the slideshow container -->

<?php
/**
* Plugin Name: soortreview
* Plugin URI: gluwebURL
* Description: niet boeiend.
Version: 1.0.0
Author: Je Naam
Author URI: gluwebURL
License: GPL-2.0+
*/
// Voeg html toe onderin de pagina.
//testimonials
add_action('get_footer','mybox_1');
function mybox_1(){
  // echo '<div class="flex-container">';
  // echo '<div class="infobox animate__animated animate__backInDown">'.get_option('testimonial1').'<br>';
  // echo '<div class="infoname">'.get_option('testimonial1n').'</div>';
  // echo '</div>';
  // echo '</div>';
  echo '<div class="slide">';
                echo '<h1 class="slide-number">';
                echo get_option('testimonial1');
                echo '<div class="infoname">'.get_option('testimonial1n').'</div>';
                echo '</h1>';
           echo '</div>';
}

add_action('get_footer','mybox_2');
function mybox_2(){
  // echo '<div class="flex-container">';
  // echo '<div class="infobox">'.get_option('testimonial2').'<br>';
  // echo '<div class="infoname">'.get_option('testimonial2n').'</div>';
  // echo '</div>';
  // echo '</div>';
  echo '<div class="slide">';
              echo  '<h1 class="slide-number">';
              echo get_option('testimonial2');
              echo '<div class="infoname">'.get_option('testimonial2n').'</div>';
                echo '</h1>';
           echo '</div>';

}
add_action('get_footer','mybox_3');
function mybox_3(){
  // echo '<div class="flex-container">';
  // echo '<div class="infobox">'.get_option('testimonial3').'<br>';
  // echo '<div class="infoname">'.get_option('testimonial3n').'</div>';
  // echo '</div>';
  // echo '</div>';

  echo '<div class="slide">';
  echo  '<h1 class="slide-number">';
  echo get_option('testimonial3');
  echo '<div class="infoname">'.get_option('testimonial3n').'</div>';
    echo '</h1>';
echo '</div>';
}
//styles
add_action('get_header','mystyles');
function mystyles(){
}
function enqueue_my_custom_styles() {
  wp_register_style( 'eigenplugin', plugins_url( 'eigenplugin/plugin.css' ) );
	wp_enqueue_style( 'eigenplugin' );
  wp_register_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
	wp_enqueue_style( 'animate' );
}
add_action('wp_enqueue_scripts', 'enqueue_my_custom_styles');

add_action('admin_menu', 'mijnplugin_menu');
function mijnplugin_menu(){
 add_menu_page('Wijzig tekst','Eigen plugin','manage_options','eigenplugin_settings_page','mijnplugin_page');
}
function mijnplugin_page(){
 echo '<h2>'.__('Footer Instellingen','menu-test').'</h2>';
 include_once('eigenplugin_settings_page.php');
}
?>
