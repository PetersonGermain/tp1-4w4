<?php
function theme_31w_customize_register($wp_customize) {
  //Le code pour ajouter des sections, des règles et les contrôles iront ici.
  $wp_customize->add_section('hero_section', array(
    'title' => __('Hero Section', 'theme_31w'),
    'priority' => 30,
  ));
  ///////////////////////////////////////////////////////// L'auteur
  $wp_customize->add_setting('hero_auteur', array(
    'default' => __('Peterson', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('hero_auteur', array(
    'label' => __('Auteur', 'theme_31w'),
    'section' => 'hero_section',
    'type' => 'text',
  ));
    ///////////////////////////////////////////////////////// Le courriel
    $wp_customize->add_setting('hero_courriel', array(
      'default' => __('info@cmaisonneuve.qc.ca', 'theme_31w'),
      'sanitize_callback' => 'sanitize_text_field'
    ));
  
    $wp_customize->add_control('hero_courriel', array(
      'label' => __('Courriel', 'theme_31w'),
      'section' => 'hero_section',
      'type' => 'text',
    ));

  /////////////////////////////////////////////////////////// Image en background de la zone héro
$wp_customize->add_setting('hero_carrousel_count', array(
  'default' => 3,
  'sanitize_callback' => 'absint',
));

$wp_customize->add_control('hero_carrousel_count', array(
  'label' => __('Nombre d’images du carrousel', 'theme_31w'),
  'section' => 'hero_section',
  'type' => 'number',
  'input_attrs' => array(
    'min' => 1,
    'max' => 10,
  ),
));

$carrousel_count = get_theme_mod('hero_carrousel_count', 3);

for ($k=0; $k<$carrousel_count; $k++)
{
  $wp_customize->add_setting('hero_background_' . $k, array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_' . $k, array(
    'label' => __('Image en background ' . ($k+1) , 'theme_31w'),
    'section' => 'hero_section',
  )));

}

  ///////////////////////////////////////////////////////// La couleur
  $wp_customize->add_setting('hero_couleur', array(
    'default' => __('', 'theme_31w'),
    'sanitize_callback' => 'esc_url_raw'
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'hero_couleur', array(
    'label' => __('Couleur de texte', 'theme_31w'),
    'section' => 'hero_section',
  )));

  ///////////////////////////////////////////////////////// La couleur des icones
  $wp_customize->add_setting('hero_couleurIcone', array(
    'default' => __('', 'theme_31w'),
    'sanitize_callback' => 'esc_url_raw'
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'hero_couleurIcone', array(
    'label' => __('Couleur des icones', 'theme_31w'),
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

  ////////////////////////////////////////////////////////////////////// L'adresse
  $wp_customize->add_setting('footer_adresse', array(
    'default' => __('3800, Sherbrooke est, Montréal, Québec, Canada, H1X 2A2', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_adresse', array(
    'label' => __('Adresse', 'theme_31w'),
    'section' => 'footer_section',
    'type' => 'text',
  ));

  ////////////////////////////////////////////////////////////////////// Le téléphone
  $wp_customize->add_setting('footer_telephone', array(
    'default' => __('(514) 254-7131', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_telephone', array(
    'label' => __('Telephone', 'theme_31w'),
    'section' => 'footer_section',
    'type' => 'text',
  ));

    ///////////////////////////////////////////////////////// La couleur du footer
    $wp_customize->add_setting('footer_couleur', array(
      'default' => __('', 'theme_31w'),
      'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'footer_couleur', array(
      'label' => __('Couleur du footer', 'theme_31w'),
      'section' => 'footer_section',
    )));  

  ////////////////////////////////////////////////////////////////////// Nouvelle section erreur
  $wp_customize->add_section('erreur_section', array(
    'title' => __('Error Section', 'theme_31w'),
    'priority' => 30,
  ));

  ///////////////////////////////////////////////////////// La couleur du titre
  $wp_customize->add_setting('erreurTitre_couleur', array(
    'default' => __('', 'theme_31w'),
    'sanitize_callback' => 'esc_url_raw'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'erreurTitre_couleur', array(
    'label' => __('Couleur du titre', 'theme_31w'),
    'section' => 'erreur_section',
  )));

  ///////////////////////////////////////////////////////// La couleur des boutons
  $wp_customize->add_setting('erreurBoutons_couleur', array(
    'default' => __('', 'theme_31w'),
    'sanitize_callback' => 'esc_url_raw'
  ));
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'erreurBoutons_couleur', array(
    'label' => __('Couleur des boutons', 'theme_31w'),
    'section' => 'erreur_section',
  )));

  ///////////////////////////////////////////////////////// Le titre
  $wp_customize->add_setting('erreur_titre', array(
    'default' => __('Erreur 404', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));
  
  $wp_customize->add_control('erreur_titre', array(
    'label' => __('Titre', 'theme_31w'),
    'section' => 'erreur_section',
    'type' => 'text',
  ));

  ///////////////////////////////////////////////////////// La description de l'erreur
  $wp_customize->add_setting('erreur_description', array(
    'default' => __('Erreur', 'theme_31w'),
      'sanitize_callback' => 'sanitize_text_field'
  ));
    
  $wp_customize->add_control('erreur_description', array(
    'label' => __('Description', 'theme_31w'),
    'section' => 'erreur_section',
    'type' => 'text',
  ));

  /////////////////////////////////////////////////////////// Image en background de la zone erreur
  $wp_customize->add_setting('erreur_background', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_background', array(
    'label' => __('Image en background', 'theme_31w'),
    'section' => 'erreur_section',
  )));
}


  add_action("customize_register", "theme_31w_customize_register");