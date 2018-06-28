<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Monumental_1080_AM
 */

?>

    <footer class="mod">
        <div class="mod__container">
            <div class="mod__footer">
              <div class="footer__list--programas">
                    <h4>Programas</h4>
                    <?php
                    wp_nav_menu( array(
                        'menu' => 'programas'
                    ) );
                     ?>
                </div>

                <div class="footer__list--info">
                    <h4>Información</h4>
                    <p>Valoramos sus preguntas y comentarios. Si quiere enviar un mensaje, por favor póngase en contacto con nosotros:</p>
                    <ul>
                        <li>Dirección: Andrade y O’Higgins. Villa Morra</li>
                        <li>Tlf: 021 618 4700</li>
                        <li>Tlf: 021 415 7570</li>
                        <!-- <li>monumental@monumental.com.py</li> -->
                    </ul>
                </div>

                <div class="footer__list--apps">
                    <h4>Descargá Nuestra app</h4>
                    <p>Si querés ampliadopuede ser nuestra app para móviles o dispositivos moviles.</p>
                    <ul>
                        <li class="apple">
                            <a href="https://itunes.apple.com/us/app/monumental-1080-am/id455244370?mt=8" target="_blank">
                                <svg id="icon-apple" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 30"><path id="manzana" d="M1.24,10.79C-1.24,15.1.33,21.64,3.08,25.6c1.37,2,2.76,3.76,4.66,3.76h.11A5.79,5.79,0,0,0,10,28.79a5.88,5.88,0,0,1,2.56-.61,5.57,5.57,0,0,1,2.44.59,5.29,5.29,0,0,0,2.33.56c2.14,0,3.46-2,4.62-3.66a16.32,16.32,0,0,0,2-4.14v0a.25.25,0,0,0-.13-.3h0a6.15,6.15,0,0,1-3.72-5.62,6.3,6.3,0,0,1,3-5.28h0a.26.26,0,0,0,.11-.16.23.23,0,0,0,0-.18,7,7,0,0,0-5.46-3l-.48,0a9.36,9.36,0,0,0-3.43.86,5.6,5.6,0,0,1-1.64.49,5.27,5.27,0,0,1-1.7-.5,8.19,8.19,0,0,0-3-.76H7.42A7.34,7.34,0,0,0,1.24,10.79Z" style="fill:#fff"/><path id="hoja" d="M17.74,0a6.72,6.72,0,0,0-4.43,2.27,6.26,6.26,0,0,0-1.59,4.66.24.24,0,0,0,.22.21h.31A5.7,5.7,0,0,0,16.43,5,6.62,6.62,0,0,0,18,.21.24.24,0,0,0,17.74,0Z" style="fill:#fff"/></svg>
                            </a>
                        </li>
                        <li class="android">
                            <a href="https://play.google.com/store/apps/details?id=com.tvaccion.monumental&hl=es" target="_blank">
                                <svg id="icon-android" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 29"><g id="b-izq"><path id="path0_fill" data-name="path0 fill" d="M1.75,9.17H1.68A1.68,1.68,0,0,0,0,10.85v7.3a1.68,1.68,0,0,0,1.68,1.68h.07a1.69,1.69,0,0,0,1.68-1.68v-7.3A1.69,1.69,0,0,0,1.75,9.17Z" style="fill:#fff"/></g><g id="cuerpo"><path id="path1_fill" data-name="path1 fill" d="M4.23,21a1.54,1.54,0,0,0,1.54,1.54H7.42v3.94A1.68,1.68,0,0,0,9.1,28.13h.07a1.68,1.68,0,0,0,1.68-1.68V22.51h2.3v3.94a1.68,1.68,0,0,0,1.68,1.68h.07a1.68,1.68,0,0,0,1.68-1.68V22.51h1.65A1.55,1.55,0,0,0,19.77,21V9.44H4.23Z" style="fill:#fff"/></g><g id="b-der"><path id="path3_fill" data-name="path3 fill" d="M22.32,9.17h-.07a1.69,1.69,0,0,0-1.68,1.68v7.3a1.68,1.68,0,0,0,1.68,1.68h.07A1.68,1.68,0,0,0,24,18.15v-7.3A1.69,1.69,0,0,0,22.32,9.17Z" style="fill:#fff"/></g><g id="cabeza"><path id="path2_fill" data-name="path2 fill" d="M15.87,2.45l1.31-2A.27.27,0,0,0,17.1.05a.28.28,0,0,0-.39.08L15.36,2.22a9,9,0,0,0-6.71,0L7.29.13A.27.27,0,0,0,6.91.05a.28.28,0,0,0-.09.38l1.31,2a6.63,6.63,0,0,0-4,5.84c0,.15,0,.3,0,.45H19.8a3.39,3.39,0,0,0,0-.45A6.63,6.63,0,0,0,15.87,2.45ZM8.39,6.07a.75.75,0,1,1,0-1.5.75.75,0,0,1,0,1.5Zm7.23,0a.75.75,0,1,1,.75-.75A.75.75,0,0,1,15.62,6.07Z" style="fill:#fff"/></g></svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="footer__list--social">
                    <h4>Seguínos</h4>
                    <ul>
                        <!-- Facebook -->
                        <li class="faceook">
                            <a href="https://www.facebook.com/AM1080/" target="_blank">
                                <svg id="icon-facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><path id="facebook" d="M20,0A20,20,0,1,0,40,20,20,20,0,0,0,20,0Zm5,20.7H21.72V32.3H16.9V20.7H14.61V16.61H16.9V14c0-1.89.9-4.86,4.86-4.86h3.58v4h-2.6a1,1,0,0,0-1,1.12v2.41H25.4Z" style="fill:#fff"/></svg>
                            </a>
                        </li>

                        <!-- Twitter -->
                        <li class="twitter">
                            <a href="https://twitter.com/am_1080" target="_blank">
                                <svg id="icon-twitter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><path id="twitter" d="M20,0A20,20,0,1,0,40,20,20,20,0,0,0,20,0Zm8.92,15.42c0,.2,0,.4,0,.6a13.09,13.09,0,0,1-20.16,11,10,10,0,0,0,1.1.06,9.21,9.21,0,0,0,5.72-2A4.58,4.58,0,0,1,11.3,22a4.91,4.91,0,0,0,.86.08,4.78,4.78,0,0,0,1.21-.16,4.61,4.61,0,0,1-3.69-4.52V17.3a4.59,4.59,0,0,0,2.09.57,4.58,4.58,0,0,1-2-3.83,4.64,4.64,0,0,1,.62-2.31,13.13,13.13,0,0,0,9.49,4.81,4.6,4.6,0,0,1,7.84-4.2,9.28,9.28,0,0,0,2.93-1.12,4.6,4.6,0,0,1-2,2.55A9.14,9.14,0,0,0,31.22,13,9.3,9.3,0,0,1,28.92,15.42Z" style="fill:#fff"/></svg>
                            </a>
                        </li>

                        <!-- instagram -->
                        <li class="instagram">
                            <a href="https://www.instagram.com/monumentalam1080/" target="_blank">
                                <svg id="icon-instagram" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><g id="instagram"><path d="M20,16.48a3.58,3.58,0,1,0,3.58,3.57A3.58,3.58,0,0,0,20,16.48Z" style="fill:#fff"/><path d="M26,10.64H14a3.46,3.46,0,0,0-3.45,3.45V26A3.46,3.46,0,0,0,14,29.47H26A3.46,3.46,0,0,0,29.41,26V14.09A3.46,3.46,0,0,0,26,10.64ZM20,26.25a6.2,6.2,0,1,1,6.2-6.2A6.21,6.21,0,0,1,20,26.25Zm6.4-11.11a1.47,1.47,0,1,1,1.46-1.47A1.47,1.47,0,0,1,26.4,15.14Z" style="fill:#fff"/><path d="M20,0A20,20,0,1,0,40,20,20,20,0,0,0,20,0ZM32,26A6.07,6.07,0,0,1,26,32.08H14A6.07,6.07,0,0,1,8,26V14.09A6.08,6.08,0,0,1,14,8H26A6.08,6.08,0,0,1,32,14.09Z" style="fill:#fff"/></g></svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <ul class="footer__list--copy">
                    <li class="copyright">Copyright ©  Todos los derechos reservados.</li>
                </ul>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<script>
		//Menu
				// Toggle menu
				$(document).ready(function () {
						$('.handle').on('click', function () {
								$('nav ul').toggleClass('toggle');
						});
				});

				$(document).ready(function () {
						$('.handle').click(function () {
								$(this).toggleClass('open');
						});
				});
</script>
<script>
    var player;

    function initPlayerSDK()
    {
        //console.log( 'TD Player SDK is ready' );

        //Player SDK is ready to be used, this is where you can instantiate a new TDSdk instance.
        //Player configuration: list of modules
        var tdPlayerConfig = {
            coreModules: [{
                id: 'MediaPlayer',
                playerId: 'td_container'
            }],
            playerReady: onPlayerReady,
            configurationError: onConfigurationError,
            moduleError: onModuleError,
            adBlockerDetected: onAdBlockerDetected
        };

        //Player instance
        player = new TDSdk( tdPlayerConfig );
    }
    /* Callback function called to notify that the SDK is ready to be used */
    function onPlayerReady()
    {
        //Listen for 'track-cue-point' event
        player.addEventListener( 'track-cue-point', onTrackCuePoint );
        //Play the stream: station is TRITONRADIOMUSIC
        //player.play( {station:'MONUMENTAL'} );
    }
    /* Callback function called to notify that the player configuration has an error. */
    function onConfigurationError( e ) {
        console.log(object);
        console.log(object.data.errors);
        //Error code : object.data.errors[0].code
        //Error message : object.data.errors[0].message
    }
    /* Callback function called to notify that a module has not been loaded properly */
    function onModuleError( object )
    {
        console.log(object);
        console.log(object.data.errors);
        //Error code : object.data.errors[0].code
        //Error message : object.data.errors[0].message
    }
    /* Callback function called to notify that a new Track CuePoint comes in. */
    function onTrackCuePoint( e )
    {
        console.log( 'onTrackCuePoint' );
        console.log( e.data.cuePoint );
        //Display now playing information in the "onair" div element.
        document.getElementById('onair').innerHTML = 'Artist: ' + e.data.cuePoint.artistName + '<BR>Title: ' + e.data.cuePoint.cueTitle;
    }
    /* Callback function called to notify that an Ad-Blocker was detected */
    function onAdBlockerDetected()
    {
        console.log( 'AdBlockerDetected' );
    }
 </script>
 <script src="http://sdk.listenlive.co/web/2.9/td-sdk.min.js"></script>
 <script>initPlayerSDK();</script>
 <script>
 $(document).ready(function() {

     //When page loads...
     $(".grilla").hide(); //Hide all content
     $("ul#tabs li:first").addClass("current").show(); //Activate first tab
     $(".grilla:first").show(); //Show first tab content

     //On Click Event
     $("ul#tabs li").click(function() {

         $("ul#tabs li").removeClass("current"); //Remove any "active" class
         $(this).addClass("current"); //Add "active" class to selected tab
         $(".grilla").hide(); //Hide all tab content

         var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
         $(activeTab).fadeIn(); //Fade in the active ID content
         return false;
     });
 });
 </script>
</body>
</html>
