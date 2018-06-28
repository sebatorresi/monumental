<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Monumental_1080_AM
 */

get_header();
?>

<section class="mod">
    <div class="mod__container">
        <div class="mod__detail">
            <section class="mod__content search">
                <h1>
                    <?php
                    /* translators: %s: search query. */
                    printf( esc_html__( 'Resultado de búsqueda para: %s', 'monumental-1080-am' ), '<span>' . get_search_query() . '</span>' );
                    ?>
                </h1>

                <ul class="media__list">
                <?php if ( have_posts() ) : ?>

                    <?php
                    /* Start the Loop */

                    while ( have_posts() ) :
                        the_post();

                        /**
                         * Run the loop for the search to output the results.
                         * If you want to overload this in a child theme then include a file
                         * called content-search.php and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', 'search' );

                    endwhile;

                    the_posts_navigation();

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif;
                ?>
            </ul>
            </section>

            <aside class="mod__side">
                <div class="publicidad">
                    <p>publicidad</p>

                    <div class="publicidad--top">
                        <img src="../img/rrss-04.jpg" alt="AM es Ampliar">
                    </div>
                </div>

                <h3>Lo mas leído</h3>

                <ul class="media__list">
                    <li class="media__list--item">
                        <a href="#" class="media__overlay--link">nombre de la noticia (oculto en css)</a>

                        <div class="media__overlay media__img">
                            <div class="media__img--responsive">
                                <img src="img/foto1.jpg" alt="Descripcion de la imagen">
                                <div class="media__icon icon--audio"></div>
                            </div>
                        </div>

                        <div class="media__content">
                            <!-- <span class="media__date">6 de febrero</span> -->
                            <h2 class="media__title">8 de cada 10 títulos de propiedad inmueble presentan datos irregulares sobre superficie</h2>
                            <a href="" class="media__tag">Fútbol</a>
                        </div>
                    </li>

                    <li class="media__list--item">
                        <a href="#" class="media__overlay--link">nombre de la noticia (oculto en css)</a>

                        <div class="media__overlay media__img">
                            <div class="media__img--responsive">
                                <img src="img/foto3.jpg" alt="Descripcion de la imagen">
                                <div class="media__icon icon--audio"></div>
                            </div>
                        </div>

                        <div class="media__content">
                            <!-- <span class="media__date">6 de febrero</span> -->
                            <h2 class="media__title">8 de cada 10 títulos de propiedad inmueble presentan datos irregulares sobre superficie</h2>
                            <a href="" class="media__tag">Fútbol</a>
                        </div>
                    </li>

                    <li class="media__list--item">
                        <a href="#" class="media__overlay--link">nombre de la noticia (oculto en css)</a>

                        <div class="media__overlay media__img">
                            <div class="media__img--responsive">
                                <img src="img/foto1.jpg" alt="Descripcion de la imagen">
                                <div class="media__icon icon--audio"></div>
                            </div>
                        </div>

                        <div class="media__content">
                            <!-- <span class="media__date">6 de febrero</span> -->
                            <h2 class="media__title">8 de cada 10 títulos de propiedad inmueble presentan datos irregulares sobre superficie</h2>
                            <a href="" class="media__tag">Fútbol</a>
                        </div>
                    </li>

                    <li class="media__list--item">
                        <a href="#" class="media__overlay--link">nombre de la noticia (oculto en css)</a>

                        <div class="media__overlay media__img">
                            <div class="media__img--responsive">
                                <img src="img/foto3.jpg" alt="Descripcion de la imagen">
                                <div class="media__icon icon--audio"></div>
                            </div>
                        </div>

                        <div class="media__content">
                            <!-- <span class="media__date">6 de febrero</span> -->
                            <h2 class="media__title">8 de cada 10 títulos de propiedad inmueble presentan datos irregulares sobre superficie</h2>
                            <a href="" class="media__tag">Fútbol</a>
                        </div>
                    </li>
                </ul>

                <div class="publicidad">
                    <p>publicidad</p>

                    <div class="publicidad--top">
                        <img src="../img/rrss-04.jpg" alt="AM es Ampliar">
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<?php
//get_sidebar();
get_footer();
