<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <!--video background-->
            <video autoplay loop muted class="header-video">
                <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/header-video.mp4" type="video/mp4">
            </video>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        </section>
        <section id="story" class="story toAnim">
            <h2 class="toAnimUp">L'histoire</h2>
            <img class="storyH2Before" src="<?php echo get_template_directory_uri() . './assets/images/sunflower_leaves.png'; ?> " alt="image de tige de fleur décorative">
            <img class="storyH2After" src="<?php echo get_template_directory_uri() . './assets/images/Sunflower.png'; ?>" alt="image de fleur décorative" data-0="animation-duration: 15s;"  data-900="animation-duration: 2s;">
            <article id="story_article" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <img class="storyArticleBefore" src="<?php echo get_template_directory_uri() . './assets/images/hibiscus_leaves.png'; ?> " alt="image de tige de fleur décorative">
            <img class="storyArticleAfter" src="<?php echo get_template_directory_uri() . './assets/images/Hibiscus.png'; ?>" alt="image de fleur décorative" data-0="animation-duration: 15s;"  data-1100="animation-duration: 2s;">
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters"  class="toAnim">
                <h3 class="toAnimUp">Les personnages</h3>
                <!-- Slider main container -->
                <div class="swiper">
                <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                    <!-- Slides -->
                        <div class="swiper-slide">
                            <?php                   
                            $character = $characters_query->posts[0];
                            echo '<figure>';
                            echo get_the_post_thumbnail( $character->ID, 'full' );
                            echo '<figcaption>'. $character->post_title . '</figcaption>';
                            echo '</figure>';
                            ?>                   
                        </div>
                        <div class="swiper-slide">
                            <?php                   
                            $character = $characters_query->posts[1];
                            echo '<figure>';
                            echo get_the_post_thumbnail( $character->ID, 'full' );
                            echo '<figcaption>'. $character->post_title . '</figcaption>';
                            echo '</figure>';
                            ?>                   
                        </div>
                        <div class="swiper-slide">
                            <?php                   
                            $character = $characters_query->posts[2];
                            echo '<figure>';
                            echo get_the_post_thumbnail( $character->ID, 'full' );
                            echo '<figcaption>'. $character->post_title . '</figcaption>';
                            echo '</figure>';
                            ?>                   
                        </div>
                        <div class="swiper-slide">
                            <?php                   
                            $character = $characters_query->posts[3];
                            echo '<figure>';
                            echo get_the_post_thumbnail( $character->ID, 'full' );
                            echo '<figcaption>'. $character->post_title . '</figcaption>';
                            echo '</figure>';
                            ?>                   
                        </div>
                        <div class="swiper-slide">
                            <?php                   
                            $character = $characters_query->posts[4];
                            echo '<figure>';
                            echo get_the_post_thumbnail( $character->ID, 'full' );
                            echo '<figcaption>'. $character->post_title . '</figcaption>';
                            echo '</figure>';
                            ?>                   
                        </div>
                    </div>
                </div>                      
            </article>
            <article id="place" class="toAnim">
                <div class= "cloud1"  data-1000="transform: translateX(0px);" data-2000="transform: translateX(300px);"></div>
                <div class= "cloud2"  data-1000="transform: translateX(0px);" data-2000="transform: translateX(300px);"></div>
                <div>
                    <h3 class="toAnimUp">Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
            </article>
        </section>
        <section id="studio" class="toAnim">
            <img class="studioBefore" src="<?php echo get_template_directory_uri() . './assets/images/random_flower.png'; ?>" alt="image de fleur décorative" data-1700="animation-duration: 15s;"  data-2700="animation-duration: 2s;">
            <img class="studioAfter" src="<?php echo get_template_directory_uri() . './assets/images/flower.png'; ?>" alt="image de fleur décorative" data-1700="animation-duration: 15s;"  data-2700="animation-duration: 2s;">
            <h2 class="toAnimUp">Studio Koukaki</h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
    </main><!-- #main -->
    
<?php
get_footer();
