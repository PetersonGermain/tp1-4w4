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

  <section class="pays">
      <p>Argentine</p>
      <p>Belgique</p>
      <p>Canada</p>
      <p>Chili</p>
      <p>Chine</p>
      <p>États-Unis</p>
      <p>France</p>
      <p>Grèce</p>
      <p>Islande</p>
      <p>Italie</p>
      <p>Japon</p>
      <p>Maroc</p>
      <p>Mexique</p>
      <p>Suisse</p>
  </section>
<?php get_footer(); ?>