<?php get_header(); ?>
<h1>front-page.php</h1>

    <section class="hero">
        <div class="hero__contenu global">
            <h1 class="hero__titre">
                <!-- Voyagez autrement avec Mondo Voyages ! -->
            </h1>
            <p class="hero__description">
                Découvrez des destinations uniques et inoubliables avec Mondo Voyages. Nous vous offrons des expériences authentiques, des paysages à couper le souffle et des aventures sur mesure. Partez à la découverte du monde avec nous et créez des souvenirs impérissables.
            </p>
            <a href="" class="hero__courriel">
                info@cmaisonneuve.qc.ca
            </a>
            <p class="hero__adresse">3800, rue Sherbrooke, Montréal</p>
            <p class="hero__numero">514-254-7131</p>
            <button class="hero__bouton">S'INSCRIRE</button>
            <div class="hero__icone-app">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
            </div>
        </div>
    </section>

    <section class="formulaire">
        <figure class="formulaire__nom">
            <p>Nom</p>
            <input class="formulaire__nomInput" placeholder="Écrivez votre nom">
        </figure>
        <figure class="formulaire__prenom">
            <p>Prénom</p>
            <input class="formulaire__prenomInput" type="text" placeholder="Écrivez votre prénom">   
        </figure>
        <figure class="formulaire__courriel">
            <p>Courriel</p>
            <input class="formulaire__courrielInput" type="text" placeholder="Écrivez votre courriel">
        </figure>
        <figure class="formulaire__prenom">
            <p>Téléphone</p>
            <input class="formulaire__telephoneInput" type="text" placeholder="Écrivez votre téléphone">
        </figure>
        <button class="formulaire__bouton">S'INSCRIRE</button>
    </section>

    <section class="galerie">
        <figure class="galerie__fig">
            <img src="" alt="">
        </figure>
    </section>
 
    <section class="promotion">
        <div class="carte carte--grande">
            <h2 class="carte__titre">Destinations de rêve</h2>
            <figure class="carte__image">
                <img src="images/img1.jpg" alt="Image de voyage">
                <img src="images/img2.webp" alt="">
                <img src="images/img3.webp" alt="">
                <img src="images/img4.jpg" alt="">
                <img src="images/img5.jpeg" alt="">
                <img src="images/img6.jpeg" alt="">
                <img src="images/img7.jpg" alt="">
                <img src="images/img8.webp" alt="">
                <img src="images/img9.jpg" alt="">
                <img src="images/img10.avif" alt="">
            </figure>
            <div class="carte__contenu">
                <p class="carte__description">Découvrez des endroits magnifiques à travers le monde.</p>
                <button class="carte__bouton carte__bouton--actif">Réserver</button>
            </div>
        </div>
    </section>
    <section class="populaire">
      <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <article class="populaire__article">
            <h2 class="populaire__titre"><?php the_title(); ?></h2>
            <div class="populaire__contenu"><?php echo wp_trim_words(get_the_content(), 20, "..."); ?></div>
          </article>
        <?php endwhile; endif; ?>
      </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>