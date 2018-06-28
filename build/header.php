<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Monumental_1080_AM
 */

	$gTriton = stream_get_contents(fopen('http://pwav4.tritondigital.com/jsonconfig.php?callsign=MONUMENTAL&streamid=11651', "rb"));
	$obj = json_decode($gTriton);
	global $programguide;
	$programguide = $obj->program_guide->info;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header" role="banner">
			<div class="header__container">
					<div class="top">
							<!-- Monumental Logo -->
							<div class="logo">
								<?php
								the_custom_logo();
								if ( is_front_page() && is_home() ) :
									?>
									<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();  ?>/svg/logo-monumental.svg" alt="Monumental AM 1080"></a>
									<?php
								else :
									?>
									<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();  ?>/svg/logo-monumental.svg" alt="Monumental AM 1080"></a>
									<?php
								endif;
								$monumental_1080_am_description = get_bloginfo( 'description', 'display' );
								if ( $monumental_1080_am_description || is_customize_preview() ) :
									?>
									<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();  ?>/svg/logo-monumental.svg" alt="Monumental AM 1080"></a>
								<?php endif; ?>
							</div>

							<!-- Player -->
							<div class="player">
								<?php
						for($i=0;$i<count($programguide->shows);$i++){
						//para conseguir el horario
						  $diasparacomparar=array ("SU","MO","TU","WE","TH","FR","SA");
						  for($m=0;$m<count($programguide->schedule->entries);$m++){  // recorre total de horarios existentes
						    if($programguide->schedule->entries[$m]->show_id==$programguide->shows[$i]->id){
						      $posiciondedias=(stripos($programguide->schedule->entries[$m]->recurrence, 'BYDAY='))+6;
						      $diasdelasemana=explode(",",substr($programguide->schedule->entries[$m]->recurrence,$posiciondedias));
						      $diadehoy=$diasparacomparar[date('w', current_time( 'timestamp', 0 ))];

						      for ($contadortemp=0;$contadortemp<count($diasdelasemana);$contadortemp++){
						        $diasdelasemana[$contadortemp]=substr($diasdelasemana[$contadortemp],0,2);
						  }

						      if(in_array($diadehoy,$diasdelasemana)){ //pregunta si suena este dia

						        // consigo los horarios de inicio, fin y actual para conseguir cual suena ahora
						        $horainicio=date('G:i',strtotime(substr($programguide->schedule->entries[$m]->start, -5)));
						        $horafin=date('G:i',strtotime(substr($programguide->schedule->entries[$m]->end, -5)));
						        $horaactual=date('G:i', current_time( 'timestamp', 0 ));
						        if(strlen($horainicio)==4){$horainicio="0".$horainicio;}
						        if(strlen($horafin)==4){$horafin="0".$horafin;}
						        if(strlen($horaactual)==4){$horaactual="0".$horaactual;}
						        if($horaactual > $horainicio && $horaactual < $horafin){ //pregunta si esta sonando ahora mismo

						echo '<div class="player__imagen"><img src="'.$programguide->shows[$i]->default_visual.'"/></div>';

						/*echo '<div id="player__controls"> ';
						$idavance = $programguide->shows[$i]->id.'.mp3';
						$idmp = $programguide->shows[$i]->id;

						echo '<div id="player--play">';
						echo '<img src="'.get_template_directory_uri().'/svg/play.svg" alt="Play">';
						echo '</div>';
						echo '<div id="player__controls--stop">';
						echo '<img src="'.get_template_directory_uri().'/svg/stop.svg" alt="Stop">';
						echo '</div>';
						echo '</div>';*/
						echo '<ul class="player__info">';
						echo '<li class="player__programa">'.$programguide->shows[$i]->title.'</li>';
						                            echo '<li class="player__horario">';
						              //para conseguir los conductores
						              for($j=0;$j<count($programguide->shows[$i]->hosts);$j++){ // recorre hosts del programa
						for($k=0;$k<count($programguide->hosts);$k++){  // recorre total de hosts existentes
						if($programguide->shows[$i]->hosts[$j]==$programguide->hosts[$k]->id){

						    //echo ' '.$programguide->hosts[$k]->name. '-';

						                  }
						                }
						                                }
						                echo '  de '. $horainicio .' a '. $horafin .'</li>';
														echo '<li class="player__onair">al aire</li>';
						                echo '</ul>';
						        }
						      }
						    }
						  }


						}
						?>




									<!-- Play / pause -->
									<div class="player__buttons">
										<div class="stream_play">
											<img src="<?php echo get_template_directory_uri();  ?>/svg/icon-play.svg" alt="Play Radio">
										</div>
										<div class="stream_stop">
											<img src="<?php echo get_template_directory_uri();  ?>/svg/icon-stop.svg" alt="Play Radio">
										</div>
										<!-- Player container -->
											<div id="td_container"></div>
											<!-- Now Playing information -->
											<div id="onair"></div>
									</div>

							</div>
					</div>
					<nav class="navigation" role="navigation">
							<div class="date">
								<?php
									setlocale(LC_ALL,"es_ES");
									echo strftime("%d %b %Y");

									//Salida: viernes 24 de febrero del 2012
								?>
							</div>
                            <span class="handle">Menu</span>
							<?php
								$args = array(
									'menu_class' => false,
									'container_class' => false
								);
									wp_nav_menu($args);
							 ?>

							<!--<div class="search">
									 <form action="POST" role="search">
											 <input type="search" placeholder="Buscar">
									 </form>
							</div>-->
					</nav>
			</div>
	</header>
