<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Monumental_1080_AM
 */

get_header();
?>

<section class="mod">
		<div class="mod__container">
				<div class="mod__detail">
						<section class="mod__content news">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			//the_post_navigation();


		endwhile; // End of the loop.
		?>
		<div class="mod__more">
				<h3>Temas relacionados</h3>
				<ul class="media__list">
						<li class="media__list--item media__list--item-1">
								<a href="#" class="media__overlay--link">nombre de la noticia (oculto en css)</a>

								<div class="media__overlay media__img">
										<div class="media__img--responsive">
												<img src="<?php echo get_template_directory_uri(); ?>/img/foto4.jpg" alt="Descripcion de la imagen">
												<div class="media__icon icon--audio"></div>
												</div>
								</div>

								<div class="media__content">
										<!-- <span class="media__date">6 de febrero</span> -->
										<h2 class="media__title">8 de cada 10 títulos de propiedad inmueble presentan datos irregulares sobre superficie</h2>
										<a href="" class="media__tag">Fútbol</a>
								</div>
						</li>

						<li class="media__list--item media__list--item-2">
								<a href="#" class="media__overlay--link">nombre de la noticia (oculto en css)</a>

								<div class="media__overlay media__img">
										<div class="media__img--responsive">
												<img src="<?php echo get_template_directory_uri(); ?>/img/foto4.jpg" alt="Descripcion de la imagen">
												<div class="media__icon icon--audio"></div>
												</div>
								</div>

								<div class="media__content">
										<!-- <span class="media__date">6 de febrero</span> -->
										<h2 class="media__title">8 de cada 10 títulos de propiedad inmueble presentan datos irregulares sobre superficie</h2>
										<a href="" class="media__tag">Fútbol</a>
								</div>
						</li>

						<li class="media__list--item media__list--item-3">
								<a href="#" class="media__overlay--link">nombre de la noticia (oculto en css)</a>

								<div class="media__overlay media__img">
										<div class="media__img--responsive">
												<img src="<?php echo get_template_directory_uri(); ?>/img/foto4.jpg" alt="Descripcion de la imagen">
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
		</div>

		<div class="mod_comments">
				<h3>Comentarios</h3>
		</div>
		</section>
		<aside class="mod__side">
				<div class="publicidad">
						<p>publicidad</p>

						<div class="publicidad--top"></div>
				</div>

				<h3>Lo mas leído</h3>

				<ul class="media__list">

<?php
	$args = array(
	    'posts_per_page' => 4,
	    'meta_key' => 'post_views',
	    'orderby' => 'meta_value_num',
	    'order' => 'DESC'
	);

$popular_posts = new WP_Query( $args );
while ( $popular_posts->have_posts() ) : $popular_posts->the_post();
?>


		<li class="media__list--item">
				<a href="<?php the_permalink(); ?>" class="media__overlay--link"><?php the_title();?></a>

				<div class="media__overlay media__img">
						<div class="media__img--responsive">
							<?php if ( has_post_thumbnail() ) : ?>
								 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
										 <?php the_post_thumbnail(); ?>
								 </a>
						 <?php endif; ?>
								<div class="media__icon icon--audio"></div>
						</div>
				</div>

				<div class="media__content">
						<!-- <span class="media__date">6 de febrero</span> -->
						<h4 class="media__title"><?php the_title('', '');?></h4>
						<?php the_category(); ?>
				</div>
		</li>

<?php endwhile; ?>


				</ul>
		</aside>
</div>
</div>
</section>

<?php
//get_sidebar();
get_footer();
