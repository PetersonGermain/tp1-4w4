<?php
/**
 * Pour l'ajout d'options à notre thème
 */

 function theme_31w_customize_register($wp_customize) {
  //Le code pour ajouter des sections, des règles et les contrôles iront ici.
  $wp_customize->add_section('hero_section', array(
    'title' => __('Hero Section', 'theme_31w'),
    'priority' => 30,
  ));
  ///////////////////////////////////////////////////////// l'auteur
  $wp_customize->add_setting('hero_auteur', array(
    'default' => __('Peterson', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('hero_auteur', array(
    'label' => __('Auteur', 'theme_31w'),
    'section' => 'hero_section',
    'type' => 'text',
  ));

  /////////////////////////////////////////////////////////// Image en background de la zone héro
  $wp_customize->add_setting('hero_background', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
    'label' => __('Image en background', 'theme_31w'),
    'section' => 'hero_section',
  )));

  ////////////////////////////////////////////////////////////////////// Nouvelle section footer
  $wp_customize->add_section('footer_section', array(
    'title' => __('Section pied de page', 'theme_31w'),
    'priority' => 30,
  ));

  ////////////////////////////////////////////////////////////////////// Champ mission
  $wp_customize->add_setting('footer_mission', array(
    'default' => __('Mission du club de voyage', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_mission', array(
    'label' => __('Mission', 'theme_31w'),
    'section' => 'footer_section',
    'type' => 'text',
  ));
  }

  add_action("customize_register", "theme_31w_customize_register");

  function mon_theme_supports() {

    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
      'height'      => 50,
      'width'       => 50,
      'flex-height' => true,
      'flex-width'  => true,
    ));

  }
  add_action( 'after_setup_theme', 'mon_theme_supports' );



  function theme_tp_enqueue_styles() { 
  wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css'); 
  wp_enqueue_style('main-style', get_stylesheet_uri()); 
  } 
  add_action('wp_enqueue_scripts', 'theme_tp_enqueue_styles');

  /**
  * Modifie la requete principale de WordPress avant qu'elle soit exécuté
  * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
  * Dépendant de la condition initiale on peut filtrer un type particulier de requête
  * Dans ce cas ci nous filtrons la requête de la page d'accueil
  * @param WP_query  $query la requête principal de WP
  */


  function modifie_requete_principal( $query ) {
    if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
      $query->set( 'category_name', 'populaire' );
      $query->set( 'orderby', 'title' );
      $query->set( 'order', 'ASC' );
      }
     }
     add_action( 'pre_get_posts', 'modifie_requete_principal' );





?>