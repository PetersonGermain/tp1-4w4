<?php
/**
 *  Template Name: Modele Pays
 */
?>
<?php
function créer_vague($couleur_haut, $couleur_bas) {
    return '
    <svg viewBox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg" style="display: block;" class= "vagueIntro">
        <defs>
            <linearGradient id="degrade" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0%" stop-color="' . htmlspecialchars($couleur_haut) . '" />
                <stop offset="100%" stop-color="' . htmlspecialchars($couleur_bas) . '" />
            </linearGradient>
        </defs>
        <path fill="url(#degrade)" fill-opacity="1" d="M0,160L40,165.3C80,171,160,181,240,197.3C320,213,400,235,480,229.3C560,224,640,192,720,181.3C800,171,880,181,960,176C1040,171,1120,149,1200,144C1280,139,1360,149,1400,154.7L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>';
}
?>

<?php
function créer_vague2($couleur_haut2, $couleur_bas2) {
    return '
    <svg viewBox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg" style="display: block;" class= "vague2">
        <defs>
            <linearGradient id="degrade" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0%" stop-color="' . htmlspecialchars($couleur_haut2) . '" />
                <stop offset="100%" stop-color="' . htmlspecialchars($couleur_bas2) . '" />
            </linearGradient>
        </defs>
        <path fill="url(#degrade)" fill-opacity="1" d="M0,160L40,165.3C80,171,160,181,240,197.3C320,213,400,235,480,229.3C560,224,640,192,720,181.3C800,171,880,181,960,176C1040,171,1120,149,1200,144C1280,139,1360,149,1400,154.7L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>';
}
?>

<?php
function trouver_articles_par_mot($mot_cle, $id_post_actuel = 0) {
  // Requête pour rechercher un mot dans le titre
  $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'post__not_in' => array($id_post_actuel),
    's' => $mot_cle, // Recherche dans le titre + contenu
  );

  $query = new WP_Query($args);

  if ($query->have_posts()) {
    echo '<ul class="articles__meme__mot">';
    while ($query->have_posts()) {
      $query->the_post();

      // Vérifie que le mot est bien dans le titre, pas seulement le contenu
      if (stripos(get_the_title(), $mot_cle) !== false) {
        echo '<li class="' . esc_attr($mot_cle) . '"><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';

      }
    }
    echo '</ul>';
  } else {
    echo 'Aucun article trouvé contenant le mot : "' . esc_html($mot_cle) . '".';
  }

  wp_reset_postdata();
}
?>



<?php get_header() ?>
  <!-- <h1>template-pays.php</h1> -->
  <section class="intro">
    <h1>Les plus beau pays</h1>
    <p>Plongez au cœur de l’aventure et laissez-vous emporter par l’appel du large ! Notre planète regorge de destinations incroyables, chacune promettant une expérience unique et mémorable. Que vous rêviez de plages idylliques baignées de soleil, de sommets majestueux invitant à la randonnée, de villes vibrantes d’histoire et de modernité, ou de rencontres culturelles authentiques, il y a un pays fait pour vous.</p>
    <div class="galerie">
      <img src="/wp-content/themes/theme-tp/images/img1.jpg" alt="">
      <img src="/wp-content/themes/theme-tp/images/img4.jpg" alt="">
      <img src="/wp-content/themes/theme-tp/images/img5.jpg" alt="">
      <img src="/wp-content/themes/theme-tp/images/img6.jpg" alt="">
     <?php echo créer_vague('#4facfe', '#00f2fe'); ?>
    </div>
  </section>
  
   <?php echo créer_vague2('#5000ca', '#000b76'); ?>
  <section class="pays">
      <p class="pays__p">Argentine</p></label>
      <p class="Belgique pays__p">Belgique</p>
      <p class="Canada pays__p">Canada</p>
      <p class="Belgique pays__p">Chili</p>
      <p class="Chine pays__p">Chine</p>
      <p class="États-Unis pays__p">États-Unis</p>
      <p class="France pays__p">France</p>
      <p class="Grèce pays__p">Grèce</p>
      <p class="Islande pays__p">Islande</p>
      <p class="Italie pays__p">Italie</p>
      <p class="Japon pays__p">Japon</p>
      <p class="Maroc pays__p">Maroc</p>
      <p class="Mexique pays__p">Mexique</p>
      <p class="Suisse pays__p">Suisse</p>

  </section>
  <section class="pays_destinations">
    <?php trouver_articles_par_mot("Argentine", get_the_ID()) ?>;
    <?php trouver_articles_par_mot("Belgique", get_the_ID()) ?>;
    <?php trouver_articles_par_mot("Canada", get_the_ID()) ?>;
    <?php trouver_articles_par_mot("Chili", get_the_ID()) ?>;
    <?php trouver_articles_par_mot("Chine", get_the_ID()) ?>;
    <?php trouver_articles_par_mot("États-Unis", get_the_ID()) ?>;
    <?php trouver_articles_par_mot("France", get_the_ID()) ?>;
    <?php trouver_articles_par_mot("Grèce", get_the_ID()) ?>;
    <?php trouver_articles_par_mot("Islande", get_the_ID()) ?>;
    <?php trouver_articles_par_mot("Italie", get_the_ID()) ?>;
    <?php trouver_articles_par_mot("Japon", get_the_ID()) ?>;
    <?php trouver_articles_par_mot("Maroc", get_the_ID()) ?>;
    <?php trouver_articles_par_mot("Mexique", get_the_ID()) ?>;
    <?php trouver_articles_par_mot("Suisse", get_the_ID()) ?>;
  </section>



<?php get_footer(); ?>