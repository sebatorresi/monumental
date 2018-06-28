<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Monumental_1080_AM
 */

?>

    <li id="post-<?php the_ID(); ?>" class="media__list--item">
        <a href="#" class="media__overlay--link">nombre de la noticia (oculto en css)</a>

        <div class="media__overlay media__img">
            <div class="media__img--responsive">
                <?php monumental_1080_am_post_thumbnail(); ?>
                <div class="media__icon icon--audio">
                    <svg id="icon-audio" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path id="bg" d="M16,0A16,16,0,1,0,32,16,16,16,0,0,0,16,0Z"/><path id="onda-3" d="M22,8.91a.46.46,0,0,1,.15.09,9.74,9.74,0,0,1,0,13.85.36.36,0,0,1-.27.12.4.4,0,0,1-.28-.67,9,9,0,0,0,0-12.74.39.39,0,0,1,0-.56A.4.4,0,0,1,22,8.91Z" style="fill:#fff"/><path id="onda-2" d="M20.48,11A.39.39,0,0,1,21,11a7,7,0,0,1,0,10L21,21l-.1.05-.13,0a.36.36,0,0,1-.2-.06l0,0a.08.08,0,0,1,0,0,.38.38,0,0,1,0-.55,6.25,6.25,0,0,0,0-8.85A.38.38,0,0,1,20.48,11Z" style="fill:#fff"/><path id="onda-1" d="M19.64,12.13a.4.4,0,0,0-.56.56,4.29,4.29,0,0,1,0,6.09.39.39,0,0,0,0,.55.18.18,0,0,0,.07.05l0,0a.58.58,0,0,0,.18,0,.33.33,0,0,0,.17,0,.28.28,0,0,0,.11-.08A5.09,5.09,0,0,0,19.64,12.13Z" style="fill:#fff"/><path id="altavoz" d="M17.4,23.32a.41.41,0,0,1-.22.37.43.43,0,0,1-.4,0l-5.21-4.82-.06-.06a1.25,1.25,0,0,0-.62-.16H7.62a.44.44,0,0,1-.43-.44v-5a.43.43,0,0,1,.43-.43h3.27a1.26,1.26,0,0,0,.62-.17l.07-.05,5.2-4.82a.43.43,0,0,1,.14,0H17l.1,0,.08,0a.42.42,0,0,1,.22.38Z" style="fill:#fff"/></svg>
                </div>
            </div>
        </div>

        <div class="media__content">
            <!-- <span class="media__date">6 de febrero</span> -->
            <?php the_title( sprintf( '<h2 class="media__title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
            <!-- el tag tiene link a todas las noticas -->
            <a href="#fuchibol" class="media__tag">Fútbol</a>
        </div>
    </li><!-- #post-<?php the_ID(); ?> -->
