<?php
  /**
 * Génére une liste de sous-catégories
 * @param string $parent_slug Le slug de la catégorie parente
 */
function categories_liste($parent_slug){
  // Récupérer la catégorie parente à partir de son slug
  $parent_category = get_category_by_slug($parent_slug);

  // Vérifier si la catégorie parente existe
  if ($parent_category) {
    $parent_id = $parent_category->term_id;
  }

  // Récupérer les sous-catégories de "destination"
  $sous_categories = get_categories(array(
    'parent' => $parent_id, // Filtrer par le parent "destination"
    'hide_empty' => true, // Ne pas afficher les catégories vides
  ));

  // Vérifier s'il y a des sous-catégories
  if (!empty($sous_categories)) {
    echo '<ul class="categorie__ul">';
    foreach ($sous_categories as $categorie) {
      // Afficher le nom de chaque sous-catégorie
      echo '<li  data-id="' . esc_html($categorie->term_id) . '" class="categorie__ul__li">' . esc_html($categorie->name) . '</li>';
    }
    echo '</ul>';
  }

 else {
  echo 'La catégorie "' . esc_html($parent_slug) . '" n\'existe pas.';
  }


}
?>

<?php
function categorie_par_destination($cat_a_retirer) {
  // Récupérer la catégorie parente "destination"
  $parent_category = get_category_by_slug("destination");

  if ($parent_category) {
    $parent_id = $parent_category->term_id;
  } else {
    echo 'La catégorie "destination" n\'existe pas.';
    return;
  }

  // Récupérer la catégorie à exclure
  $cat_exclure = get_category_by_slug($cat_a_retirer);
  $exclude_id = $cat_exclure ? $cat_exclure->term_id : 0;

  // Récupérer les sous-catégories de "destination" en excluant une
  $sous_categories = get_categories(array(
    'parent' => $parent_id,
    'hide_empty' => true,
    'exclude' => array($exclude_id),
  ));

  // Afficher la liste
  if (!empty($sous_categories)) {
    echo '<ul class="categorie__ul">';
    foreach ($sous_categories as $categorie) {
      echo '<li data-id="' . esc_attr($categorie->term_id) . '" class="categorie__ul__li">' . esc_html($categorie->name) . '</li>';
    }
    echo '</ul>';
  } else {
    echo 'Aucune sous-catégorie disponible.';
  }
}
?>